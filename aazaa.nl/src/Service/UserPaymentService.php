<?php

namespace App\Service;

use App\Entity\Collector;
use App\Entity\User;
use App\Entity\UserPayments;
use App\Entity\UserWorkshop;
use App\Entity\Workshop;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;


class UserPaymentService
{

    protected $container;
    protected $em;
    protected $mollie;
    protected $router;

    /**
     * UserPaymentService constructor.
     * @param ContainerInterface $container
     * @param EntityManagerInterface $em
     * @param RouterInterface $router
     * @throws \Mollie\Api\Exceptions\ApiException
     * @throws \Mollie\Api\Exceptions\IncompatiblePlatform
     */
    public function __construct(ContainerInterface $container, EntityManagerInterface $em, RouterInterface $router)
    {
        $this->container = $container;
        $this->em = $em;
        $this->router = $router;

        $this->mollie = new \Mollie\Api\MollieApiClient();
        $this->mollie->setApiKey(getenv('MOLLIE_API_KEY'));
    }

    /**
     * @param UserPayments $userPayment
     * @return bool
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function validateUserPaymentPayment(UserPayments $userPayment)
    {
        $mailHelper = $this->container->get('mail_helper');
        try {
            $mollieStatus = $this->mollie->payments->get($userPayment->getMollieId());

            if ($mollieStatus->isPaid() && $userPayment->getStatus() != UserPayments::PAID) {
                $userPayment->setPaid(true);
                $userPayment->setStatus(UserPayments::PAID);
                $mailHelper->paymentSuccess($userPayment);
            } elseif ($mollieStatus->isFailed() && $userPayment->getStatus() != UserPayments::FAILED) {
                $userPayment->setStatus(UserPayments::FAILED);
                $mailHelper->paymentFailed($userPayment);
            } elseif ($mollieStatus->isCanceled() && $userPayment->getStatus() != UserPayments::CANCELED) {
                $userPayment->setStatus(UserPayments::CANCELED);
                $mailHelper->paymentFailed($userPayment);
            } elseif ($mollieStatus->isExpired() && $userPayment->getStatus() != UserPayments::EXPIRED) {
                $userPayment->setStatus(UserPayments::EXPIRED);
                $mailHelper->paymentFailed($userPayment);
            } elseif ($mollieStatus->hasRefunds()) {
                $userPayment->setStatus(UserPayments::REFUND);
            } elseif ($mollieStatus->hasChargebacks()) {
                $userPayment->setStatus(UserPayments::CHARGEDBACK);
            }

            $this->em->persist($userPayment);
            $this->em->flush();
            return true;
        } catch (\Mollie\Api\Exceptions\ApiException $e) {
            error_log($e->getMessage());
        }
        return false;
    }

    /**
     * @param User $user
     * @param $mollieId
     * @return bool
     * @throws \Doctrine\ORM\NonUniqueResultException
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function validateUserSubscription(User $user, $mollieId)
    {
        if ($user) {
            /** Get status from first payment */
            try {
                $mollieStatus = $this->mollie->payments->get($mollieId);
                if ($mollieStatus) {

                    if ($mollieStatus->isFailed() or $mollieStatus->isCanceled() or $mollieStatus->isExpired()) {
                        $user->setSubscriptionActive(false);
                        $user->setSubscriptionCancelledDate(new \DateTime());
                        $this->container->get('mail_helper')->newSubscriptionFailed($user);
                    } elseif ($mollieStatus->hasRefunds() or $mollieStatus->hasChargebacks()) {
                        $prevPaymentDate = $user->getSubscriptionActiveTillDate();
                        if (!$prevPaymentDate) {
                            $prevPaymentDate = new \DateTime();
                        }
                        $prevPaymentDate->modify('-1 MONTHS');

                        $user->setSubscriptionActiveTillDate($prevPaymentDate);
                        $user->setSubscriptionActive(false);
                        $user->setSubscriptionCancelledDate(new \DateTime());
                    } elseif ($mollieStatus->isPaid()) {

                        /** if there is a existing subscription. Extend the exisiting one */
                        if ($user->getSubscriptionActiveTillDate() and $user->getSubscriptionActiveTillDate()->format('Ymd') > (new \DateTime())->format('Ymd')) {
                            $subscriptionTillDate = $user->getSubscriptionActiveTillDate();
                            $subscriptionTillDate->modify('+1 MONTHS');
                            $user->setSubscriptionActiveTillDate($subscriptionTillDate);
                            $user->setSubscriptionActive(true);
                        } else {
                            $user->setSubscriptionActiveTillDate(new \DateTime('+1 MONTHS'));
                            $user->setSubscriptionActive(true);
                            $this->container->get('mail_helper')->newSubscriptionSuccess($user);
                        }
                        $this->em->persist($user);
                        $this->em->flush();


                        if (!$user->getSubscriptionMandate()) {
                            $output = $this->findValidMandate($user);
                            if ($output) {
                                $user = $output;
                            }
                        }

                        /** if user as Mandate and subscription price is defined. Then create automated subscription */
                        if ($user->getSubscriptionMandate() and !$user->getSubscriptionId()) {
                            $this->continueSubscription($user);
                        }
                    }

                    $user->setSubscriptionStatus($mollieStatus->status);
                    $this->em->persist($user);
                    $this->em->flush();
                }
                return true;
            } catch (\Mollie\Api\Exceptions\ApiException $e) {
                error_log($e->getMessage());
            }
        }
        return false;
    }

    /**
     * @param User $user
     * @param Workshop $workshop
     * @param int $priceType
     * @return bool
     */
    public function subscribeToWorkshop(User $user, Workshop $workshop, $priceType = 0)
    {

        try {
            $userWorkshop = new UserWorkshop();
            $userWorkshop->setWorkshop($workshop);
            $userWorkshop->setUser($user);
            $userWorkshop->setPaymentType($priceType);
            $this->em->persist($userWorkshop);

            $userPayment = new UserPayments();
            $userPayment->setUser($user);
            $userPayment->setUserWorkshop($userWorkshop);
            $this->em->persist($userPayment);
            $this->em->flush();

            $price = (string)number_format($workshop->getPrice($priceType), 2, '.', '');

            /** @var GoogleCalendar $googleCalendar */
            $googleCalendar = $this->get('fungio.google_calendar');
            $googleCalendar->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);
            $googleCalendar->setCredentialsPath(getcwd() . '/../.credentials/calendar.json');
            $googleCalendar->setClientSecretPath(getcwd() . '/../Resources/GoogleCalendarBundle/client_secret.json');

            if ($request->query->has('code') && $request->get('code')) {
                $client = $googleCalendar->getClient($request->get('code'));
                if (is_string($client)) {
                    return new RedirectResponse($client);
                }
            } else {
                $client = $googleCalendar->getClient();
            }

            $googleCalendar->addEvent(
                $_ENV['GOOGLE_CALENDAR_EMAIL'],
                $workshop->getStartDatetime(),
                $workshop->getEndDatetime(),
                $workshop->getLocation() . ' (' . $user->getFirstname() . ')',
                $user->getFirstname() . ' ' . $user->getLastname() . '(' . $user->getUsername() . ')' . PHP_EOL
                    . $price . ($priceType !== 0 ? '(' . ($priceType == 1 ? '75%' : '50%') . ')' : ''),
                $user->getEmail(),
                "Some location"
            );


            $payment = $this->mollie->payments->create([
                "amount" => [
                    "currency" => "EUR",
                    "value" => $price
                ],
                "description" => "Inschrijven voor " . $workshop->getType() . ": " . $workshop->getTitle(),
                "redirectUrl" => $this->router->generate('account_workshop', ['payment' => $userPayment->getId()], UrlGeneratorInterface::ABSOLUTE_URL),
                "webhookUrl" => $this->router->generate('webhook_mollie', [], UrlGeneratorInterface::ABSOLUTE_URL)
            ]);

            $userPayment->setAmount($payment->amount->value);
            $userPayment->setStatus($payment->status);
            $userPayment->setMollieId($payment->id);
            $userPayment->setPaymentUrl($payment->_links->checkout->href);
            $this->em->persist($userPayment);
            $this->em->flush();

            return $payment->_links->checkout->href;
        } catch (\Mollie\Api\Exceptions\ApiException $e) {
            error_log('#92 - generate workshop payment: ' . $e->getMessage());
        }
        return false;
    }

    /**
     * @param User $user
     * @return bool
     * @throws \Exception
     */
    public function stopSubscription(User $user)
    {
        if ($user->getSubscriptionId() and $user->getMollieUserId()) {
            try {
                $customer = $this->mollie->customers->get($user->getMollieUserId());
                $response = $customer->cancelSubscription($user->getSubscriptionId());
                if ($response) {
                    $user->setSubscriptionId(null);
                    $user->setSubscriptionActive(false);
                    $user->setSubscriptionStatus('canceled');
                    $user->setSubscriptionCancelledDate(new \DateTime());
                    $this->em->persist($user);
                    $this->em->flush();
                    return true;
                }
            } catch (\Mollie\Api\Exceptions\ApiException $e) {
                error_log('stopsubscription ' . $e->getMessage());
            }
        }
        return false;
    }

    /**
     * @param User $user
     * @return bool
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function startSubscription(User $user)
    {
        $amount = $this->em->getRepository(Collector::class)->getOneByKey('subscription_price');
        if ($amount) {
            try {
                /** oldusers don't have mollie user id. Update user to generate mollie user Id */
                if (!$user->getMollieUserId()) {
                    $output = $this->container->get('user_manager_service')->updateUser($user, $user->getUsername(), $user->getEmail());
                    if (isset($output['user'])) {
                        $user = $output['user'];
                    }
                }

                $price = $amount / 100;
                $price = (string)number_format($price, 2, '.', '');

                $payment = $this->mollie->payments->create([
                    "amount" => [
                        "currency" => "EUR",
                        "value" => $price // You must send the correct number of decimals, thus we enforce the use of strings
                    ],
                    "customerId" => $user->getMollieUserId(),
                    "sequenceType" => "first",
                    "description" => "Lidmaatschap Aazaa.org, Lidmaatschapnummer: #" . $user->getMollieUserId(),
                    "redirectUrl" => $this->router->generate('subscription_success', ['mollieUserId' => $user->getMollieUserId()], UrlGeneratorInterface::ABSOLUTE_URL),
                    "webhookUrl" => $this->router->generate('webhook_mollie_subscription', ['mollieUserId' => $user->getMollieUserId()], UrlGeneratorInterface::ABSOLUTE_URL),
                    'metadata' => [
                        'mollie_user_id' => $user->getMollieUserId(), 'userId' => $user->getId()
                    ]
                ]);

                $userPayment = new UserPayments();
                $userPayment->setUser($user);
                $userPayment->setAmount($payment->amount->value);
                $userPayment->setMollieId($payment->id);
                $userPayment->setPaymentUrl($payment->_links->checkout->href);
                $userPayment->setStatus('Aangemaakt');
                $this->em->persist($userPayment);

                $this->em->persist($user);
                $this->em->flush();
                return $payment->_links->checkout->href;
            } catch (\Mollie\Api\Exceptions\ApiException $e) {
                error_log($e->getMessage());
            }
        }
        return false;
    }

    /**
     * @param User $user
     * @return bool
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function continueSubscription(User $user)
    {

        $amount = $this->em->getRepository(Collector::class)->getOneByKey('subscription_price');
        if ($amount) {
            try {
                $nextPaymentDate = $user->getSubscriptionActiveTillDate();
                if (!$nextPaymentDate) {
                    $nextPaymentDate = new \DateTime();
                }
                $nextPaymentDate->modify('+1 MONTHS');

                $price = $amount / 100;
                $price = (string)number_format($price, 2, '.', '');

                $customer = $this->mollie->customers->get($user->getMollieUserId());
                if ($customer) {
                    $subscription = $customer->createSubscription([
                        "amount" => [
                            "value" => $price, // You must send the correct number of decimals, thus we enforce the use of strings
                            "currency" => "EUR"
                        ],
                        "interval" => "1 month",
                        "startDate" => $nextPaymentDate->format('Y-m-d'),
                        "description" => "Lidmaatschapgelden Aazaa.org, Lidmaatschapnummer: #" . $user->getMollieUserId(),
                        "webhookUrl" => $this->router->generate('webhook_mollie_subscription', ['mollieUserId' => $user->getMollieUserId()], UrlGeneratorInterface::ABSOLUTE_URL)
                    ]);

                    if ($subscription) {
                        $user->setSubscriptionStatus($subscription->status);
                        $user->setSubscriptionId($subscription->id);
                        $user->setSubscriptionActive(true);
                        $this->em->persist($user);
                        $this->em->flush();
                        return true;
                    }
                }
            } catch (\Mollie\Api\Exceptions\ApiException $e) {
                error_log($e->getMessage());
            }
        }
        return false;
    }


    /**
     * @param User $user
     * @return User|bool
     */
    private function findValidMandate(User $user)
    {
        try {
            $mandates = $this->mollie->customers->get($user->getMollieUserId());
            foreach ($mandates->mandates() as $mandate) {
                if ($mandate->status == 'valid') {
                    $user->setSubscriptionMandate($mandate->id);
                    $this->em->persist($user);
                    $this->em->flush();
                    return $user;
                }
            }
        } catch (\Mollie\Api\Exceptions\ApiException $e) {
            error_log($e->getMessage());
        }
        return false;
    }
}
