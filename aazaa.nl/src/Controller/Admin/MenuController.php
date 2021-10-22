<?php

namespace App\Controller\Admin;

use App\Entity\Collector;
use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class MenuController extends AbstractController
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



}