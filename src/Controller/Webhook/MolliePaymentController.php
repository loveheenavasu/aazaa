<?php

namespace App\Controller\Webhook;

use App\Entity\Collector;
use App\Entity\User;
use App\Entity\UserPayments;
use App\Entity\UserWorkshop;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class MolliePaymentController extends AbstractController {

    protected $mollieClient;

    /**
     * @param Request $request
     * @return Response
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function normalWebhook(Request $request){

        $em = $this->getDoctrine()->getManager();
        $status = false;
        if($request->isMethod('POST') AND $request->get('id')) {
            $userPayment = $em->getRepository(UserPayments::class)->findOneBy([
                'mollieId' => $request->get('id')
            ]);

            $userPaymentService = $this->get('user_payment');
            $status = $userPaymentService->validateUserPaymentPayment($userPayment);
        }
        if($status){
            return new Response('', Response::HTTP_OK);
        }
        return new Response($this->renderView('Error/404.html.twig'), Response::HTTP_NOT_FOUND);
    }

    /**
     * @param $mollieUserId
     * @param Request $request
     * @return Response
     * @throws \Doctrine\ORM\NonUniqueResultException
     * @throws \Swift_TransportException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function subscriptionWebhook($mollieUserId, Request $request){

        $em = $this->getDoctrine()->getManager();

        if($request->isMethod('POST') AND $mollieUserId) {
            $user = $em->getRepository(User::class)->findOneBy([
                'mollieUserId' => $mollieUserId
            ]);

            $userPaymentService = $this->get('user_payment');
            $status = $userPaymentService->validateUserSubscription($user, $request->request->get('id'));
            if($status){
                return new Response('', Response::HTTP_OK);
            }
        }
        return new Response($this->renderView('Error/404.html.twig'), Response::HTTP_NOT_FOUND);
    }

}