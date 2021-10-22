<?php

namespace App\Service;

use FOS\UserBundle\Doctrine\UserManager;
use App\Entity\User;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class UserManagerService {

    /** @var Container $container */
    protected $container;
    protected $userManager;
    protected $encoderFactory;

    public function __construct(UserManager $userManager,ContainerInterface $container, EncoderFactoryInterface $encoderFactory) {
        $this->userManager = $userManager;
        $this->container = $container;
        $this->encoderFactory = $encoderFactory;
    }

    /**
     * @param null $user
     * @param $email
     * @param $username
     * @param null $firstName
     * @param null $lastName
     * @param null $gender
     * @param null $mailing
     * @param null $password
     * @return array
     * @throws \Exception
     */
    public function updateOrCreateUser(
        $user           = null,
        $email,
        $username,
        $firstName      = null,
        $lastName       = null,
        $gender         = null,
        $mailing        = null,
        $password       = null
    ){
        if($user){
            return $this->updateUser($user, $username, $email, $firstName, $lastName, $gender, $mailing, $password);
        }
        else {
            return $this->registerNewUser($email, $username, $firstName, $lastName, $gender, $mailing, $password);
        }
    }

    /**
     * @param $email
     * @param $username
     * @param null $firstName
     * @param null $lastName
     * @param null $gender
     * @param null $mailing
     * @param $password
     * @return array
     * @throws \Exception
     */
    public function registerNewUser(
        $email,
        $username,
        $firstName      = null,
        $lastName       = null,
        $gender         = null,
        $mailing        = null,
        $password

    ){
        $message = '';
        if(!$this->userManager->findUserByEmail($email)) {
            if (!$this->userManager->findUserByUsername($username)) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $response = $this->saveUser($email, $username, $firstName, $lastName, $gender, $mailing, $password, false);
                    if ($response AND isset($response['user']) AND isset($response['password'])) {
                        if($response['user']->isEnabled()) {
                            $this->setUserLoginToken($response['user']);
                        }
                        $this->container->get('mail_helper')->newUserEmail($response['user'], $response['password']);

                        return [
                            'status' => true,
                            'user' => $response['user']
                        ];
                    }
                } else {
                    $message = 'E-mailadres is ongeldig: ' . $email;
                }
            } else {
                $message = 'Er bestaat al een profiel met gebruikersnaam: ' . $username;
            }
        } else {
            $message = 'Er bestaat al een profiel met het emailadres ' . $email;
        }

        return [
            'status'    => false,
            'message'   => $message
        ];
    }

    /**
     * @param $user
     * @param $username
     * @param $email
     * @param null $firstName
     * @param null $lastName
     * @param null $gender
     * @param null $mailing
     * @param null $password
     * @return array
     * @throws \Exception
     */
    public function updateUser(
        $user,
        $username,
        $email,
        $firstName      = null,
        $lastName       = null,
        $gender         = null,
        $mailing        = null,
        $password       = null
    ){
        if($user){
            $oldEmail = $user->getEmail();
            $oldUsername = $user->getUsername();
            $oldPassword = $user->getPassword();
            $response = $this->saveUser($email, $username, $firstName, $lastName, $gender, $mailing, $password, $user->isEnabled(), $user);
            if($response AND isset($response['user'])) {
                if ($oldEmail != $response['user']->getEmail()) {
                    $this->container->get('mail_helper')->newEmailAddress($response['user'], $oldEmail);
                }
                if($oldUsername != $response['user']->getUsername()){
                    $this->container->get('mail_helper')->newUsername($response['user'], $oldUsername);
                }

                if($oldPassword != $response['user']->getPassword()){
                    $this->container->get('mail_helper')->sendNewPassword($response['user'], $password);
                }

                return [
                    'status' => true,
                    'user'  => $response['user']
                ];
            }
        }
        return [
            'status'    => false,
            'message'   => 'Er is iets fout gegaan in gebruikersbeheer. Probeer opnieuw'
        ];
    }

    /**
     * @param $email
     * @param null $username
     * @param null $firstName
     * @param null $lastName
     * @param null $gender
     * @param null $mailing
     * @param null $password
     * @param bool $enabled
     * @param null $user
     * @return array
     * @throws \Exception
     */
    private function saveUser(
        $email,
        $username       = null,
        $firstName      = null,
        $lastName       = null,
        $gender         = null,
        $mailing        = null,
        $password       = null,
        $enabled        = false,
        $user           = null
    ){
        $output = [];
        if(!$user){
            /** @var User $user */
            $user = $this->userManager->createUser();
            $user->setEnabled(true);
            $user->addRole('ROLE_USER');
        }
        if($username and $user->getUsername() != $username){
            $user->setUsername($username);
        }

        if($password){
            $encoder = $this->encoderFactory->getEncoder($user);

            $checkIfNew = $encoder->isPasswordValid($user->getPassword(),$password,$user->getSalt());
            if(!$checkIfNew) {
                $output['password'] = $password;
                $user->setPlainPassword($output['password']);
                $user->setTokenLogin(\Ramsey\Uuid\Uuid::uuid4());
            }
        }

        $user->setEmail(trim($email));
        $user->setEnabled($enabled);

        if ($firstName AND $user->getFirstname() != $firstName AND trim($firstName) != '') {
            $user->setFirstname(trim($firstName));
        }

        if ($lastName AND $user->getLastname() != $lastName AND trim($lastName) != '') {
            $user->setLastname(trim($lastName));
        }

        if (!is_null($mailing) AND $user->getMailingSubscription() != $mailing) {
            $user->setMailingSubscription($mailing);
        }

        if($gender) {
            $gender = substr(strtolower($gender), 0, 1);
            if ($user->getGender() != $gender AND trim($gender) != '') {
                $user->setGender(trim($gender));
            }
        }

        if(!$user->getMollieUserId()){
            try {
                $mollie = new \Mollie\Api\MollieApiClient();
                $mollie->setApiKey(getenv('MOLLIE_API_KEY'));

                $name = trim($user->getFirstname() . ' ' . $user->getLastname());
                if($name == ''){
                    $name = explode('@',$user->getEmail());
                    $name = reset($name);
                }
                $customer = $mollie->customers->create([
                    "name" => $name,
                    "email" => $user->getEmail()
                ]);
                $user->setMollieUserId($customer->id);
            } catch(\Exception $e){

            }
        }

        $user->setLastLogin(new \DateTime());
        $this->userManager->updateUser($user);

        $output['user'] = $user;
        return $output;
    }

    /**
     * @param User $user
     * @throws \Exception
     */
    public function setUserLoginToken(User $user){
        $token = new UsernamePasswordToken($user, $user->getPassword(), 'public', $user->getRoles());
        $this->container->get("security.token_storage")->setToken($token);
        $this->container->get('session')->set('_security_main', serialize($token));
    }

    /**
     * @param $email
     * @return bool
     * @throws \Exception
     */
    public function resetUserPassword($email)
    {
        /** @var User $existingUser */
        $user = $this->userManager->findUserByEmail($email);

        if (!$user) {
            return false;
        }
        $password = $this->generatePassword();
        $user->setPlainPassword($password);
        $user->addRole('ROLE_USER');
        $this->userManager->updateUser($user);

        return $this->container->get('mail_helper')->sendNewPassword($user, $password, true);

    }


    /**
     * @param int $length
     * @return string
     */
    public function generatePassword($length = 8) {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890#@!%&*?';
        $pass = []; //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $password = implode($pass);

        return $password;
    }
}