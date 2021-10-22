<?php

namespace App\Controller\Admin;

use App\Entity\Collector;
use App\Entity\User;
use App\Service\MailHelper;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class UserController extends AbstractController
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request){
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $collectorItems = $em->createQueryBuilder()
            ->select('u')
            ->from(User::class, 'u')
            ->getQuery();

        $pagination = $this->get('knp_paginator')->paginate(
            $collectorItems,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('Admin/User/index.html.twig', [
            'pagination' => $pagination
        ]);

    }

    /**
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function detail(User $user){

        return $this->render('Admin/User/detail.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function disable(User $user){
        $user->setEnabled(false);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('admin_user_overview');
    }

    /**
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function enable(User $user){
        $user->setEnabled(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->redirectToRoute('admin_user_overview');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function mailing(Request $request){

        return $this->render('Admin/User/mailing.html.twig',[
            'mailingUsers'  => $this->getDoctrine()->getRepository(User::class)->findBy([
                'mailingSubscription' => true
            ])
        ]);
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function sendMailing(Request $request){

        if($request->get('subscribers') AND $request->get('subject') AND $request->get('content')){

            /** @var EntityManager $em */
            $em = $this->getDoctrine()->getManager();
            /** @var MailHelper $mailHelper */
            $mailHelper = $this->get('mail_helper');

            $mailCounter = 0;
            foreach($request->get('subscribers') as $subscriber){
                /** @var User $user */
                if($user = $em->getRepository(User::class)->findOneBy(['id' => $subscriber])){
                    $replace_list = [
                        '{aanhef}'              => $user->getGender() ? ($user->getGender() == 'm' ? 'dhr': 'mevr') : '',
                        '{aanhef_heer_mevrouw}' => $user->getGender() ? ($user->getGender() == 'm' ? 'heer': 'mevrouw') : '',
                        '{voornaam}'            => $user->getFirstname() ?: '',
                        '{achternaam}'          => $user->getLastname() ?: '',
                        '{gebruikersnaam}'      => $user->getUsername() ?: ''
                    ];

                    $content = str_replace(array_keys($replace_list), $replace_list, $request->get('content'));
                    if($mailHelper->sendMailing($user, $request->get('subject'),$content)){
                        $mailCounter++;
                    }
                }
            }
            $this->addFlash("success", 'Totaal: '.$mailCounter.' e-mails verzonden');

        } else {
            $this->addFlash("danger", 'Er is iets fout gegaan');
        }
        return $this->redirectToRoute('admin_user_mailing');
    }


}