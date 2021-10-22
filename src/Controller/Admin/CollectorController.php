<?php

namespace App\Controller\Admin;

use App\Entity\Collector;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class CollectorController extends AbstractController
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $collectorItems = $em->createQueryBuilder()
            ->select('c')
            ->from(Collector::class, 'c')
            ->getQuery();

        $pagination = $this->get('knp_paginator')->paginate(
            $collectorItems,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('Admin/Collector/index.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $collector = $em->getRepository(Collector::class)->findOneBy(['id' => $request->get('id')]);

        if ($request->getMethod() == 'POST' and $request->get('key')) {
            if (!$collector) {
                $collector = new Collector();
            }
            $collector->setKey(str_replace([' '], '_', trim($request->get('key'))));
            $collector->setValue($request->get('value'));
            $collector->setValueInt($request->get('valueInt') ?: NULL);
            $em->persist($collector);
            $em->flush();

            $this->addFlash("success", 'Block / instelling: ' . $request->get('key') . ' opgeslagen');
            return $this->redirectToRoute('admin_collector_index');
        }

        return $this->render('Admin/Collector/editor.html.twig', [
            'collector' => $collector
        ]);
    }
}
