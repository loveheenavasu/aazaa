<?php

namespace App\Service;

use App\Entity\PageContent;
use App\Entity\UserMessage;
use App\Entity\UserPayments;
use cspoo\Swiftmailer\MailgunBundle\Service\MailgunTransport;
use Doctrine\ORM\EntityManagerInterface;
use Mailgun\Mailgun;
use Symfony\Component\DependencyInjection\Container;
use App\Entity\User;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class MailHelper
 * @package WebsiteBundle\Services
 */
class MailHelper {

    /** @var Container $container */
    protected $container;
    protected $messageId;
    protected $mailer;
    protected $twig;
    protected $noReply;
    protected $userManagerService;
    protected $em;

    /**
     * MailHelper constructor.
     * @param $noReply
     * @param MailgunTransport $mailer
     * @param \Twig_Environment $twig
     * @param ContainerInterface $container
     * @param UserManagerService $userManagerService
     * @param EntityManagerInterface $em
     */
    public function __construct(
        $noReply,
        MailgunTransport $mailer,
        \Twig_Environment $twig,
        ContainerInterface $container,
        UserManagerService $userManagerService,
        EntityManagerInterface $em
    ) {
        $this->mailer               = $mailer;
        $this->twig                 = $twig;
        $this->noReply              = $noReply;
        $this->container            = $container;
        $this->userManagerService   = $userManagerService;
        $this->em                   = $em;
    }

    /**
     * @return null
     */
    public function getMessageId(){
        return $this->messageId;
    }

    /**
     * @param User $user
     * @param $oldEmail
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function newEmailAddress(User $user, $oldEmail){
        return $this->sendMail(
            'newEmailAddress',
            $user,
            'E-mailadres is gewijzigd',
            ['oldEmail' => $oldEmail]
        );
    }

    /**
     * @param UserPayments $userPayments
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function paymentSuccess(UserPayments $userPayments){
        return $this->sendMail(
            'paymentSuccess',
            $userPayments->getUser(),
            'Betaling is gelukt',
            ['userPayments' => $userPayments],
            null,
            null,
            true
        );
    }

    /**
     * @param UserPayments $userPayments
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function paymentFailed(UserPayments $userPayments){
        return $this->sendMail(
            'paymentFailed',
            $userPayments->getUser(),
            'Betaling mislukt',
            ['userPayments' => $userPayments],
            null,
            null,
            true
        );
    }


    /**
     * @param User $user
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function newSubscriptionSuccess(User $user){
        return $this->sendMail(
            'newSubscriptionSuccess',
            $user,
            'Lidmaatschap - Aazaa.org',
            [],
            null,
            null,
            true
        );
    }
    /**
     * @param User $user
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function newSubscriptionFailed(User $user){
        return $this->sendMail(
            'newSubscriptionFailed',
            $user,
            'Lidmaatschap - Aazaa.org',
            [],
            null,
            null,
            true
        );
    }

    /**
     * @param User $user
     * @param $oldUsername
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function newUsername(User $user, $oldUsername){
        return $this->sendMail(
            'newUsername',
            $user,
            'Gebruikersnaam is gewijzigd',
            ['oldUsername' => $oldUsername]
        );
    }

    /**
     * @param User $user
     * @param $password
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function newUserEmail(User $user, $password){
        return $this->sendMail(
            'newUser',
            $user,
            'Activeer je account bij de Aazaa Academie',
            ['password' => $password]
        );
    }

    /**
     * @param User $user
     * @param $password
     * @param bool $reset
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function sendNewPassword(User $user, $password, $reset = false){
        return $this->sendMail(
            'newPassword',
            $user,
            'Nieuw wachtwoord voor Aazaa.org',
            [
                'password' => $password,
                'reset' => $reset
            ]
        );
    }

    /**
     * @param User $user
     * @param $subject
     * @param $content
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function sendMailing(User $user, $subject, $content){
        return $this->sendMail(
            'mailing',
            $user,
            $subject,
            ['content' => $content]
        );
    }

    /**
     * @param User $user
     * @param $receiverName
     * @param $receiverEmail
     * @param PageContent $pageContent
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function sendShareVideoMail(User $user, $receiverName, $receiverEmail, PageContent $pageContent){
        return $this->sendMail(
            'shareVideo',
            $user,
            'Deze video moet je zien!',
            [
                'receiverName' => $receiverName,
                'receiverEmail' => $receiverEmail,
                'pageContent' => $pageContent
            ],
            $user->getEmail(),
            $receiverEmail,
            true
        );
    }

    /**
     * @param User $user
     * @param $receiverName
     * @param $receiverEmail
     * @param $pageUrl
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function sendSharePageMail(User $user, $receiverName, $receiverEmail, $pageUrl){
        return $this->sendMail(
            'sharePage',
            $user,
            'Deze pagina moet je zien!',
            [
                'receiverName' => $receiverName,
                'receiverEmail' => $receiverEmail,
                'pageUrl' => $pageUrl
            ],
            $user->getEmail(),
            $receiverEmail,
            true
        );
    }


    /**
     * @param $template
     * @param User $user
     * @param string $subject
     * @param array $data
     * @param null $from
     * @param null $to
     * @param bool $bccToAazaa
     * @return int
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function sendMail($template, User $user, $subject = 'Welkom bij Aazaa.org', array $data = [], $from = null, $to = null, $bccToAazaa = false) {

        $message = (new \Swift_Message($subject));

        if($user) {
            $data['user'] = $user;
        }
        $data['message'] = $message;
        $data['subject'] = $subject;

        $content = $this->twig->render('Email/' . $template . '.html.twig', $data);
        $message
            ->setSubject($subject)
            ->setFrom($from ? $from : $this->noReply )
            ->setTo($to ? $to : $user->getEmail())
            ->setBody($content,'text/html');

        if($bccToAazaa){
            $message->setBcc('info@aazaa.org');
        }

        $this->messageId = $message->getId();

        $userMessage = new UserMessage();
        $userMessage->setUser($user);
        $userMessage->setContent($content);
        $userMessage->setMessageId($message->getId());
        $userMessage->setSubject($subject);


        $this->em->persist($userMessage);
        $this->em->flush();


        $result = $this->mailer->send($message);

        return $result;
    }
}