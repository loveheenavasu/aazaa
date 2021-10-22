<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PaymentController extends AbstractController{

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function subscription($mollieUserId){
        return $this->redirectToRoute('account_index');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function payment(){
        return $this->redirectToRoute('account_index');
    }


}
