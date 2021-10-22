<?php

namespace App\Controller;

use App\Entity\Collector;
use App\Entity\Workshop;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkshopController extends AbstractController
{

    /**
     * @return Response
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function indexWorkshop()
    {
        $em = $this->getDoctrine()->getManager();
        $workshops = $em->getRepository(Workshop::class)->getActiveByType([Workshop::WORKSHOP]);
        return $this->render('Workshop/list.html.twig', [
            'workshops' => $workshops,
            'price_explanation' => $em->getRepository(Collector::class)->getOneByKey('workshop_session_price_explain'),
            'pageContent' => [
                'metaTitle' => 'Workshops | Aazaa.org',
                'metaDescription' => '',
                'content' => ''
            ]
        ]);
    }

    /**
     * @return Response
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function indexCursus()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('Workshop/list.html.twig', [
            'workshops' => $em->getRepository(Workshop::class)->getActiveByType([Workshop::CURSUS, Workshop::WORKSHOP]),
            'price_explanation' => $em->getRepository(Collector::class)->getOneByKey('workshop_session_price_explain'),
            'pageContent' => [
                'metaTitle' => 'Cursussen | Aazaa.org',
                'metaDescription' => '',
                'content' => ''
            ]
        ]);
    }


    /**
     * @param null $year
     * @param null $week
     * @return Response
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function calendarWeek($year = null, $week = null)
    {
        $startDate = new \DateTime();
        $endDate = new \DateTime();

        if ($year and $week) {
            $startDateSet = new \DateTime();
            $startDateSet->setISODate($year, $week);

            if ($startDateSet->format('YW') < $startDate->format('YW')) {
                return $this->redirectToRoute('sessions_calendar_date', [
                    'year' => $startDate->format('Y'),
                    'week' => $startDate->format('W')
                ]);
            }

            $startDate = $startDateSet;

            $endDateSet = new \DateTime();
            $endDateSet->setISODate($year, $week);
        }

        $startDate->setISODate((int)$startDate->format('o'), (int)$startDate->format('W'), 1);
        $startDate->setTime(0, 0, 0);
        $endDate->setISODate((int)$startDate->format('o'), (int)$startDate->format('W'), 7);
        $endDate->setTime(23, 59, 59);

        $em = $this->getDoctrine()->getManager();
        $workshops = $em->getRepository(Workshop::class)->getBetween(Workshop::SESSION, $startDate, $endDate);


        return $this->render('Workshop/calendar.html.twig', [
            'workshops' => $workshops,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'latestTime' => $this->getLatestTimeInWorkshops($workshops),
            'price_explanation' => $em->getRepository(Collector::class)->getOneByKey('workshop_session_price_explain'),
            'pageContent' => [
                'metaTitle' => 'Sessies | Aazaa.org',
                'metaDescription' => '',
                'content' => ''
            ]
        ]);
    }

    /**
     * @param $dates
     * @return |null
     */
    private function getLatestTimeInWorkshops($dates)
    {
        $time = null;
        foreach ($dates as $date) {
            foreach ($date as $workshop) {
                $checkTime = explode(':', $workshop['endTime']);
                if (!$time or $time < $checkTime[0]) {
                    $time = $checkTime[0];
                }
            }
        }
        return $time;
    }


    /**
     * @param $slug
     * @return Response
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function detail($slug)
    {

        $em = $this->getDoctrine()->getManager();
        $workshop = $em->getRepository(Workshop::class)->findOneBy([
            'slug' => $slug,
            'active' => true
        ]);

        if ($workshop) {
            return $this->render('Workshop/detail.html.twig', [
                'workshop' => $workshop,
                'booking_conditions' => $em->getRepository(Collector::class)->getOneByKey('boekingsvoorwaarden'),
                'price_explanation' => $em->getRepository(Collector::class)->getOneByKey('workshop_session_price_explain'),
                'pageContent' => [
                    'metaTitle' => $workshop->getTitle() . ' | Aazaa.org',
                    'metaDescription' => '',
                    'content' => ''
                ]
            ]);
        }

        return new Response($this->renderView('Error/404.html.twig', ['slug' => '']), 404);
    }

    /**
     * @param Workshop $workshop
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function subscribe(Workshop $workshop, Request $request)
    {

        if ($workshop->getSeatsAvailable() < 1) {
            $this->addFlash("danger", 'Error! -> There are no more available places');
            return $this->redirectToRoute('admin_workshop_index');
        }


        $redirectUrl = $this->get('user_payment')->subscribeToWorkshop(
            $this->getUser(),
            $workshop,
            $request->get('price', 0)
        );
        if ($redirectUrl) {
            return $this->redirect($redirectUrl);
        }

        return new Response($this->renderView('Error/404.html.twig', ['slug' => '']), 404);
    }
}
