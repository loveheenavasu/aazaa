<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;

class GitHandler {

    protected $eventName;
    protected $object;
    protected $delivery;
    protected $branch;
    protected $projectPath;
    protected $secret;
    protected $doctrineUpdate;

    /**
     * GitHandler constructor.
     * @param $branch
     * @param $projectPath
     * @param $secret
     * @param $doctrineUpdate
     */
    public function __construct($branch, $projectPath, $secret, $doctrineUpdate)
    {
        $this->branch           = $branch;
        $this->projectPath      = $projectPath;
        $this->doctrineUpdate   = $doctrineUpdate;
        $this->secret           = $secret;
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function parseGithubRequest(Request $request){

        if ($this->checkSecurity($request)) {

            $result = 'Event: ' .$this->eventName. ' - ' .$this->object->ref . ' Not updated';
            if($this->object->ref == 'refs/heads/'.$this->branch) {
                if($this->eventName == 'push') {
                    $result = 'Event: '.$this->eventName . ' -> ' .$this->object->ref. ' - '.$this->pullEvent();
                }
            }
            return $result;
        }
        else {
            throw new \InvalidArgumentException('Invalid security checksum header.');
        }
    }

    /**
     * @param Request $request
     * @return string
     */
    public function parseBitbucketRequest(Request $request){

        $bitbucketIpList = ['104.192.136.0','104.192.136.21','34.198.203.127','34.198.178.64','34.198.32.85', '104.192.143.193', '104.192.143.194', '104.192.142.195', '104.192.142.196', '104.192.142.197', '104.192.142.193', '104.192.142.192', '104.192.142.191', '104.192.142.190'];
        if(in_array($request->getClientIp(),$bitbucketIpList)) {
            if ($postData = json_decode($request->getContent(), true)) {
                if (isset($postData['push'])) {
                    foreach ($postData['push']['changes'] as $change) {
                        if (isset($change['new']['type']) AND isset($change['new']['name'])) {
                            if ($change['new']['type'] == 'branch' AND $change['new']['name'] === $this->branch) {
                                return $this->pullEvent();
                                break;
                            }
                        }
                    }
                }
            }
        }
        else {
            echo $request->getClientIp(). ' is not whitelisted ';
        }
        return false;
    }

    /**
     * @param Request $request
     * @return bool
     */
    protected function checkSecurity(Request $request) {

        $signature  = (string) $request->headers->get('X-Hub-Signature');
        $event      = (string) $request->headers->get('X-Github-Event');
        $delivery   = (string) $request->headers->get('X-Github-Delivery');
        $payload    = (string) $request->getContent();

        if (!empty($signature) AND !empty($event) AND !empty($delivery)) {
            if ($this->validateSignature($this->secret, $signature, $payload)) {
                $this->eventName    = $event;
                $this->object       = json_decode($request->getContent());
                $this->delivery     = $delivery;
                return true;
            }
        }
        return false;
    }

    /**
     * @param $secret
     * @param $signatureHeader
     * @param $payload
     * @return bool
     */
    protected function validateSignature($secret, $signatureHeader, $payload) {
        list ($algo, $gitHubSignature) = explode('=', $signatureHeader);
        $payloadHash = hash_hmac($algo, $payload, $secret);
        return ($payloadHash == $gitHubSignature);
    }

    /**
     * Push event, pull the new event to the server
     */
    protected function pullEvent(){
        $result = shell_exec('cd '.$this->projectPath.' && git pull' );
        if($this->doctrineUpdate) {
            $result .= shell_exec('cd ' . $this->projectPath . ' && php -d bin/console doctrine:schema:update');
        }
        shell_exec('cd '.$this->projectPath.' && php -d memory_limit=1G bin/console cache:clear --env=prod');
        shell_exec('cd '.$this->projectPath.' && php -d memory_limit=1G bin/console cache:clear --env=dev');
        return $result;
    }
}