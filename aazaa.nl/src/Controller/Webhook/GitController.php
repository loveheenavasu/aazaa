<?php


namespace App\Controller\Webhook;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Service\GitHandler;

class GitController extends AbstractController {

    /**
     * Github webhook events
     * @param Request $request
     * @return Response
     */
    public function github(Request $request){
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 0);
        $gitHandler = $this->get('git.handler');
        if($status = $gitHandler->parseGithubRequest($request)){
            return new Response('Success -> '. $status,200);
        }
        return new Response('Error',400);
    }

    /**
     * Github webhook events
     * @param Request $request
     * @return Response
     */
    public function bitbucket(Request $request){
        $gitHandler = $this->get('git.handler');
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 0);

        if($status = $gitHandler->parseBitbucketRequest($request)){
            return new Response('Success -> '. $status,200);
        }
        return new Response('Error',400);
    }

}