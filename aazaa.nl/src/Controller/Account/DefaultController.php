<?php

namespace App\Controller\Account;

use App\Entity\Collector;
use App\Entity\User;
use App\Entity\UserPayments;
use App\Entity\UserWorkshop;
use App\Entity\Workshop;
use Doctrine\ORM\EntityManager;
use OpenTok\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DefaultController extends AbstractController
{

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request){

        return $this->render('Account/index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Exception
     */
    public function generateSubscription(){
        $output = $this->get('user_payment')->startSubscription($this->getUser());

        if($output){
            return $this->redirect($output);
        }
        return $this->redirectToRoute('account_subscription');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Exception
     */
    public function stopSubscription(){
        $this->get('user_payment')->stopSubscription($this->getUser());
        return $this->redirectToRoute('account_subscription');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function favorites(Request $request){

        return $this->render('Account/favorites.html.twig');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function subscription(Request $request){

        return $this->render('Account/subscription.html.twig');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function viewedVideos(Request $request){

        return $this->render('Account/viewedVideos.html.twig');
    }

    /**
     * @param UserWorkshop $userWorkshop
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function startVideoSession(UserWorkshop $userWorkshop){

        /** check if user have paid, rights and workshop is not empty and have active session */
        if(
            !$userWorkshop->getWorkshop() OR
            $userWorkshop->getUser()->getId() !== $this->getUser()->getId() OR
            !$userWorkshop->getPaid() OR
            !$userWorkshop->getWorkshop()->getVideoChatSessionId()
        ){
            return $this->redirectToRoute('account_workshop');
        }

        /** @var User $user */
        $token = $this->get('open_tok')->getToken($userWorkshop->getWorkshop()->getVideoChatSessionId());

        return $this->render('Account/videoChat.html.twig', [
            'workshop' => $userWorkshop->getWorkshop(),
            'apiKey' => getenv('OPENTOK_KEY'),
            'token' => $token
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function workshop(Request $request){
        if($request->get('payment')) {
            $userPayment = $this->getDoctrine()->getRepository(UserPayments::class)->findOneBy(['id' => $request->get('payment')]);
            if ($userPayment) {
                $userPaymentService = $this->get('user_payment');
                $userPaymentService->validateUserPaymentPayment($userPayment);
            }
        }
        return $this->render('Account/workshop.html.twig');
    }


    /**
     * @param $userMail
     * @param $userToken
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function unsubscribeMailing($userMail, $userToken){
        $em = $this->get('doctrine')->getManager();

        $user = $em->getRepository(User::class)->findOneBy([
            'email' => $userMail,
            'tokenLogin' => $userToken
        ]);

        if($user){
            $user->setMailingSubscription(false);
            $em->persist($user);
            $em->flush();
            return $this->render('Templates:content.html.twig', [
                'pageContent' => [
                    'metaTitle' => 'Uitschrijven mailing | Aazaa.org',
                    'metaDescription' => 'Uitschrijven mailing | Aazaa.org',
                    'content' => $em->getRepository(Collector::class)->getOneByKey('unsubscribe_mailing') ?: '<h1>Succesvol uitgeschreven</h1><br><p>Wij hebben u succesvol uitgeschreven</p>',
                ]
            ]);
        }
        return $this->redirectToRoute('account_index');
    }


}
