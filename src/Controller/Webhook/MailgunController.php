<?php

namespace App\Controller\Webhook;

use App\Entity\MessageTracking;
use App\Entity\UserMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class MailgunController extends AbstractController
{

    public function mailgun(Request $request)
    {
        /** set Basic stuff */
        $em = $this->getDoctrine()->getManager();
        $dateTime = new \DateTime();
        $messageId = null;

        /** Get Message Id from mailgun */
        if($request->get('Message-Id')){
            $messageId = $request->get('Message-Id');
            $messageId = str_replace(['<','>'],'',$messageId);
        } else {
            $messageId = $request->get('message-id');
        }


        if($userMessage = $em->getRepository(UserMessage::class)->findOneBy(['messageId' => $messageId])) {

            /** @var MessageTracking $messageTracking */
            $messageTracking = new MessageTracking();
            $messageTracking->setUserMessage($userMessage);
            $messageTracking->setDatetime($dateTime->setTimestamp($request->get('timestamp')));
            $messageTracking->setEmail($request->get('recipient'));

            if($request->get('description')) {
                $messageTracking->setDescription($request->get('description'));
            }
            elseif($request->get('notification')){
                $messageTracking->setDescription($request->get('notification'));
            }

            switch($request->get('event')){
                case 'accepted':
                    $messageTracking->setType('wachtrij');
                    break;
                case 'rejected':
                case 'failed':
                    $messageTracking->setType('fout');
                    break;
                case 'unsubscribed':
                    $messageTracking->setType('uitgeschreven');
                    break;
                case 'complained':
                    $messageTracking->setType('spam klacht ingediend');
                    break;
                case 'delivered':
                    $messageTracking->setType('bezorgd');
                    break;
                case 'opened':
                    $messageTracking->setType('geopend');
                    $messageTracking->setUserAgent($request->get('user-agent'));
                    $messageTracking->setDeviceType($request->get('device-type'));
                    break;
                case 'clicked':
                    $messageTracking->setType('url geklikt');
                    $messageTracking->setUrl($request->get('url'));
                    $messageTracking->setIpadress($request->get('ip'));
                    $messageTracking->setUserAgent($request->get('user-agent'));
                    $messageTracking->setDeviceType($request->get('device-type'));
                    break;
            }

            $em->persist($messageTracking);
            $em->flush();
        }
        return new Response('Message received',200);
    }
}