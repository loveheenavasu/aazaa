<?php

namespace App\Service;


use OpenTok\OpenTok;

/**
 * Class MailHelper
 * @package WebsiteBundle\Services
 */
class OpenTokHelper {

    /** @var OpenTok $openTok */
    private $openTok;

    public function __construct($apiKey, $apiSecret){
        $this->openTok = new OpenTok($apiKey, $apiSecret);
    }


    public function createSession(){
        $session = $this->openTok->createSession();
        return $session->getSessionId();
    }

    public function getToken($session){
        return $this->openTok->generateToken($session);
    }

    public function getStreams($sessionId){
        return $this->openTok->listStreams($sessionId);
    }


}