<?php

namespace App\Controller\Admin;

use App\Entity\Workshop;
use App\Entity\WorkshopLocation;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;


class WorkshopController extends AbstractController {

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request){
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $workshops = $em->createQueryBuilder()
            ->select('w')
            ->from(Workshop::class, 'w')
            ->orderBy('w.startDatetime', 'DESC')
            ->getQuery();

        $pagination = $this->get('knp_paginator')->paginate(
            $workshops,
            $request->query->getInt('page', 1),
            10
        );


        return $this->render('Admin/Workshop/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function edit(Request $request){
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $workshop = $em->getRepository(Workshop::class)->findOneBy(['id' => $request->get('workshopId')]);
        $locations = $em->getRepository(WorkshopLocation::class)->findAll();

        if($request->getMethod() == 'POST'){
            if(!$workshop){
                $workshop = new Workshop();
            }
            $location = $em->getRepository(WorkshopLocation::class)->findOneBy(['id' => $request->get('location')]);

            $workshop->setTitle($request->get('title'));
            $workshop->setStartDatetime(new \DateTime($request->get('startDatetime')));
            $workshop->setEndDatetime(new \DateTime($request->get('endDatetime')));
            $workshop->setType($request->get('type'));
            $workshop->setActive($request->get('active'));
            $workshop->setSeats($request->get('seats'));
            $workshop->setPrice($request->get('price'));
            $workshop->setDescription($request->get('description'));
            $workshop->setLocation($location);
            $workshop->setDescriptionShort($request->get('descriptionShort'));

            $em->persist($workshop);
            $em->flush();

            $this->addFlash("success", 'Workshop: '.$request->get('title').' opgeslagen');
            return $this->redirectToRoute('admin_workshop_index');
        }

        return $this->render('Admin/Workshop/workshop.html.twig', [
            'workshop' => $workshop,
            'locations' => $locations
        ]);
    }

    /**
     * Remove workshop
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function remove($id){
        $em = $this->getDoctrine()->getManager();
        $workshop = $em->getRepository(Workshop::class)->findOneBy(['id' => $id]);
        if($workshop){
            $this->addFlash("success", 'Workshop: '.$workshop->getTitle().' is verwijderd');
            $em->remove($workshop);
            $em->flush();
            return $this->redirectToRoute('admin_workshop_index');
        }
        $this->addFlash("error", 'Er is iets fout gegegaan, workshop niet verwijderd');
        return $this->redirectToRoute('admin_workshop_index');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function cloneWorkshops(Request $request){
        if($request->getMethod() == 'POST' AND $request->get('dates')){
            $em = $this->getDoctrine()->getManager();

            /** @var Workshop $workshop */
            $workshop = $em->getRepository(Workshop::class)->findOneBy(['id' => $request->get('workshopId')]);
            if($workshop){
                $diff = date_diff($workshop->getStartDatetime(), $workshop->getEndDatetime());

                $dates = explode(', ', $request->get('dates'));
                foreach($dates as $date){

                    $newStartDatetime = \DateTime::createFromFormat('d/m/Y',$date);
                    $newStartDatetime->setTime(0,0,0);
                    $newEndDatetime = clone $newStartDatetime;

                    $newEndDatetime->setTime(0,0,0);
                    if($diff->d > 0) {
                        $newEndDatetime->modify('+' . $diff->d . 'DAY');
                    }
                    if($diff->m > 0) {
                        $newEndDatetime->modify('+' . $diff->m . 'MONTH');
                    }
                    if($diff->m > 0) {
                        $newEndDatetime->modify('+' . $diff->y . 'YEAR');
                    }
                    $newEndDatetime->setTime($workshop->getEndDatetime()->format('H'), $workshop->getEndDatetime()->format('i'));
                    $newStartDatetime->setTime($workshop->getStartDatetime()->format('H'), $workshop->getStartDatetime()->format('i'));


                    $newWorkshop = new Workshop();
                    $newWorkshop->setTitle($workshop->getTitle());
                    $newWorkshop->setLocation($workshop->getLocation());
                    $newWorkshop->setType($workshop->getType());
                    $newWorkshop->setActive($workshop->getActive());
                    $newWorkshop->setDescription($workshop->getDescription());
                    $newWorkshop->setDescriptionShort($workshop->getDescriptionShort());
                    $newWorkshop->setPrice($workshop->getPrice());
                    $newWorkshop->setSeats($workshop->getSeats());
                    $newWorkshop->setEndDatetime($newEndDatetime);
                    $newWorkshop->setStartDatetime($newStartDatetime);

                    $em->persist($newWorkshop);
                    $em->flush();
                    $this->addFlash("success", 'Workshop gekopieerd: '. $newWorkshop->getStartDatetime()->format('d-m-Y'));
                }
            }
            return $this->redirectToRoute('admin_workshop_index');
        }
        $this->addFlash("error", 'Er is iets fout gegaan. Probeer opnieuw');
        return $this->redirectToRoute('admin_workshop_index');
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function locationOverview(Request $request){
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $workshops = $em->createQueryBuilder()
            ->select('l')
            ->from(WorkshopLocation::class, 'l')
            ->orderBy('l.name', 'DESC')
            ->getQuery();

        $pagination = $this->get('knp_paginator')->paginate(
            $workshops,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('Admin/Workshop/locationOverview.html.twig', [
            'pagination' => $pagination
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function editLocation(Request $request){
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $location = $em->getRepository(WorkshopLocation::class)->findOneBy(['id' => $request->get('id')]);

        if($request->getMethod() == 'POST'){
            if(!$location){
                $location = new WorkshopLocation();
            }
            $location->setName($request->get('name'));
            $location->setStreet($request->get('street'));
            $location->setHouseNumber($request->get('houseNumber'));
            $location->setZipcode($request->get('zipcode'));
            $location->setCity($request->get('city'));
            $location->setDescription($request->get('description'));
            $location->setColor($request->get('color'));
            $location->setPrice($request->get('price'));
            $location->setIsVideo((bool)$request->get('is_video'));

            $em->persist($location);
            $em->flush();

            $this->addFlash("success", 'Locatie: '.$request->get('name').' opgeslagen');
            return $this->redirectToRoute('admin_workshop_location_index');
        }

        return $this->render('Admin/Workshop/location.html.twig', [
            'location' => $location,
        ]);
    }
}