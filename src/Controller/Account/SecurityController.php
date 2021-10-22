<?php

namespace App\Controller\Account;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Controller\SecurityController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class SecurityController extends BaseController {

    /**
     * Renders the login template with the given parameters. Overwrite this function in
     */
    protected function renderLogin(array $data)
    {
        return $this->render('Account/login.html.twig', $data);
    }

    public function checkAction()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    public function logoutAction()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function register(Request $request){
        if($request->getMethod() == 'POST') {
            if ($this->isCsrfTokenValid('register', $request->get('csrf_token')) AND $request->get('email') AND $request->get('password')  AND $request->get('password_check')) {
                if($request->get('password') === $request->get('password_check')) {
                    $usermanagerService = $this->get('user_manager_service');
                    if ($response = $usermanagerService->registerNewUser(
                        $request->get('email'),
                        $request->get('username'),
                        $request->get('firstname'),
                        $request->get('lastname'),
                        $request->get('gender'),
                        $request->get('mailing'),
                        $request->get('password')
                    )) {
                        if ($response['status']) {
                            return $this->render('Account/login.html.twig', [
                                'errormessage' => 'Account aangemaakt, u heeft een activatie email ontvangen op: ' . $request->get('email')
                            ]);
                        } else {
                            return $this->render('Account/login.html.twig', [
                                'errormessage' => $response['message'],
                                'email' => $request->get('email'),
                                'username' => $request->get('username'),
                                'firstname' => $request->get('firstname'),
                                'lastname' => $request->get('lastname'),
                                'gender' => $request->get('gender'),
                            ]);
                        }
                    }
                }
                else {
                    return $this->render('Account/login.html.twig', [
                        'errormessage' => 'Wachtwoorden komen niet overeen',
                        'email' => $request->get('email'),
                        'username' => $request->get('username'),
                        'firstname' => $request->get('firstname'),
                        'lastname' => $request->get('lastname'),
                        'gender' => $request->get('gender'),
                    ]);
                }
            }
            return $this->render('Account/login.html.twig', [
                'errormessage' => 'Beveilingstoken onjuist. Token is vernieuwd, probeer opnieuw'
            ]);
        }
        return $this->redirectToRoute('account_index');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function update(Request $request){

        if($request->getMethod() == 'POST') {
            if ($this->isCsrfTokenValid('update', $request->get('csrf_token')) AND $request->get('email')) {

                if($request->get('password')) {
                    if ($request->get('password') !== $request->get('password_check')) {
                        return $this->render('Account/index.html.twig', [
                            'errormessage' => 'Wachtwoorden komen overeen.'
                        ]);
                    }
                };


                $usermanagerService = $this->get('user_manager_service');
                if ($response = $usermanagerService->updateUser(
                    $this->getUser(),
                    $request->get('username'),
                    $request->get('email'),
                    $request->get('firstname'),
                    $request->get('lastname'),
                    $request->get('gender'),
                    $request->get('mailing', false),
                    $request->get('password')
                )) {
                    if ($response['status']) {
                        return $this->redirectToRoute('account_index');
                    }
                    else {
                        return $this->render('Account/index.html.twig', [
                            'errormessage' => 'Er is iets fout gegaan. probeer opnieuw'
                        ]);
                    }
                }
            }
            return $this->render('Account/index.html.twig', [
                'errormessage' => 'Beveilingstoken onjuist. Token is vernieuwd. probeer opnieuw'
            ]);
        }
        return $this->redirectToRoute('account_index');
    }

    /**
     * @param $hash
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @throws \Exception
     */
    public function loginByHash($hash) {
        /** @var EntityManager $em */
        $em = $this->get('doctrine')->getManager();
        if ($user = $em->getRepository(User::class)->findOneBy([
            'tokenLogin' => $hash,
            'validateEmail' => true
        ])) {
            $token = new UsernamePasswordToken($user, $user->getPassword(), "public", $user->getRoles());
            $this->get("security.token_storage")->setToken($token);
            $this->get('session')->set('_security_main', serialize($token));

            return $this->redirectToRoute('account_index');
        }
        throw new \Exception('user not found');
    }

    /**
     * @param $userId
     * @param $tokenLogin
     * @param $email
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function activateAccount($userId, $tokenLogin, $email){
        /** @var EntityManager $em */
        $em = $this->get('doctrine')->getManager();
        $user = $em->getRepository(User::class)->findOneBy([
            'id' => $userId,
            'tokenLogin' => $tokenLogin,
            'email' => $email,
        ]);
        if($user AND !$user->isEnabled()){
            $user->setEnabled(true);
            $em->persist($user);
            $em->flush();

            $token = new UsernamePasswordToken($user, $user->getPassword(), "public", $user->getRoles());
            $this->get("security.token_storage")->setToken($token);
            $this->get('session')->set('_security_main', serialize($token));
            return $this->redirectToRoute('account_index');
        }
        elseif($user){
            return $this->render('Account/login.html.twig', [
                'successmessage' => 'Account is al geactiveerd. Login om verder te gaan'
            ]);
        }
        return $this->render('Account/login.html.twig', [
            'errormessage' => 'Account niet gevonden, maak een account aan'
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function resetPassword(Request $request){

        if($request->getMethod() == 'POST'){
            if($this->isCsrfTokenValid('reset', $request->get('csrf_token')) AND $request->get('email')) {
                $userManger = $this->get('user_manager_service');
                if ($userManger->resetUserPassword($request->get('email'))) {
                    return $this->render('Account/reset.html.twig', [
                        'successmessage' => 'Nieuw wachtwoord is gestuurd naar: ' . $request->get('email')
                    ]);
                }
                return $this->render('Account/reset.html.twig', [
                    'errormessage' => 'Geen account gevonden met emailadres: ' . $request->get('email')
                ]);
            }
            return $this->render('Account/reset.html.twig', [
                'errormessage' => 'Beveiligstoken onjuist en/of leeg emailadres'
            ]);
        }


        return $this->render('Account/reset.html.twig');
    }

}
