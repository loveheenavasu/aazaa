<?php

namespace App\Controller\Admin;

use FOS\UserBundle\Controller\SecurityController as BaseController;

class SecurityController extends BaseController
{

    /**
     * Renders the login template with the given parameters. Overwrite this function in
     */
    protected function renderLogin(array $data)
    {
        return $this->render('Admin/login.html.twig', $data);
    }


    public function checkAction()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    public function logoutAction()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }

}
