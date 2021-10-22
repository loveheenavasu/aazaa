<?php

namespace App\Controller\Admin;

use App\Entity\UserWorkshop;
use App\Entity\Workshop;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class VideoController extends AbstractController {

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function index(){
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var UserWorkshop[] $userWorkshops */
        $userWorkshops = $em->getRepository(UserWorkshop::class)
            ->createQueryBuilder('uw')
            ->join('uw.workshop', 'v')
            ->join('v.location', 'l')
            ->where('v.active = :true')
            ->andWhere('v.type = :session')
            ->andWhere('v.startDatetime >= :today')
            ->andWhere('l.isVideo = :true')
            ->setParameter('session', Workshop::SESSION)
            ->setParameter('true', true)
            ->setParameter('today', (new \DateTime())->format('Y-m-d'))
            ->getQuery()
            ->getResult();

        return $this->render('Admin/Video/index.html.twig', [
            'userWorkshops' => $userWorkshops
        ]);
    }

    /**
     * @param Workshop $workshop
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function create(Workshop $workshop){
        $em = $this->getDoctrine()->getManager();
        $openTok = $this->get('open_tok');

        if(!$workshop->getVideoChatSessionId()) {
            $workshop->setVideoChatSessionId($openTok->createSession());
            $em->persist($workshop);
            $em->flush();
        }
        return $this->redirectToRoute('video_chat_open', ['workshop' => $workshop->getId()]);
    }

    /**
     * @param Workshop $workshop
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function open(Workshop $workshop){
        $openTok = $this->get('open_tok');
        return $this->render('Admin/Video/session.html.twig', [
            'apiKey' => getenv('OPENTOK_KEY'),
            'workshop' => $workshop,
            'token' => $openTok->getToken($workshop->getVideoChatSessionId())
        ]);
    }

    /**
     * @param Workshop $workshop
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function close(Workshop $workshop){
        $em = $this->getDoctrine()->getManager();
        $workshop->setVideoChatSessionId(NULL);
        $em->persist($workshop);
        $em->flush();

        return $this->redirectToRoute('video_chat_index');
    }

}