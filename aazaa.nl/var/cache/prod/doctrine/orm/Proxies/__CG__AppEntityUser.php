<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'gender', 'firstname', 'lastname', 'tokenLogin', '' . "\0" . 'App\\Entity\\User' . "\0" . 'watchLog', '' . "\0" . 'App\\Entity\\User' . "\0" . 'workshops', '' . "\0" . 'App\\Entity\\User' . "\0" . 'favorites', '' . "\0" . 'App\\Entity\\User' . "\0" . 'messages', '' . "\0" . 'App\\Entity\\User' . "\0" . 'payments', '' . "\0" . 'App\\Entity\\User' . "\0" . 'mollieUserId', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionId', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionStatus', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionActive', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionCancelledDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionMandate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionActiveTillDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'mailingSubscription', '' . "\0" . 'App\\Entity\\User' . "\0" . 'created', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'roles'];
        }

        return ['__isInitialized__', 'id', 'gender', 'firstname', 'lastname', 'tokenLogin', '' . "\0" . 'App\\Entity\\User' . "\0" . 'watchLog', '' . "\0" . 'App\\Entity\\User' . "\0" . 'workshops', '' . "\0" . 'App\\Entity\\User' . "\0" . 'favorites', '' . "\0" . 'App\\Entity\\User' . "\0" . 'messages', '' . "\0" . 'App\\Entity\\User' . "\0" . 'payments', '' . "\0" . 'App\\Entity\\User' . "\0" . 'mollieUserId', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionId', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionStatus', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionActive', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionCancelledDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionMandate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'subscriptionActiveTillDate', '' . "\0" . 'App\\Entity\\User' . "\0" . 'mailingSubscription', '' . "\0" . 'App\\Entity\\User' . "\0" . 'created', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'plainPassword', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'groups', 'roles'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPayments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPayments', []);

        return parent::getPayments();
    }

    /**
     * {@inheritDoc}
     */
    public function setPayments($payments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPayments', [$payments]);

        return parent::setPayments($payments);
    }

    /**
     * {@inheritDoc}
     */
    public function getTokenLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTokenLogin', []);

        return parent::getTokenLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setTokenLogin($tokenLogin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokenLogin', [$tokenLogin]);

        return parent::setTokenLogin($tokenLogin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', []);

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', [$firstname]);

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', []);

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', [$lastname]);

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getWatchLog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWatchLog', []);

        return parent::getWatchLog();
    }

    /**
     * {@inheritDoc}
     */
    public function setWatchLog($watchLog)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWatchLog', [$watchLog]);

        return parent::setWatchLog($watchLog);
    }

    /**
     * {@inheritDoc}
     */
    public function getFavorites()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFavorites', []);

        return parent::getFavorites();
    }

    /**
     * {@inheritDoc}
     */
    public function setFavorites($favorites)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFavorites', [$favorites]);

        return parent::setFavorites($favorites);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkshops()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkshops', []);

        return parent::getWorkshops();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkshops($workshops)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkshops', [$workshops]);

        return parent::setWorkshops($workshops);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriptionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriptionId', []);

        return parent::getSubscriptionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubscriptionId($subscriptionId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubscriptionId', [$subscriptionId]);

        return parent::setSubscriptionId($subscriptionId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriptionActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriptionActive', []);

        return parent::getSubscriptionActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubscriptionActive($subscriptionActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubscriptionActive', [$subscriptionActive]);

        return parent::setSubscriptionActive($subscriptionActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriptionCancelledDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriptionCancelledDate', []);

        return parent::getSubscriptionCancelledDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubscriptionCancelledDate($subscriptionCancelledDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubscriptionCancelledDate', [$subscriptionCancelledDate]);

        return parent::setSubscriptionCancelledDate($subscriptionCancelledDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriptionStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriptionStatus', []);

        return parent::getSubscriptionStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubscriptionStatus($subscriptionStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubscriptionStatus', [$subscriptionStatus]);

        return parent::setSubscriptionStatus($subscriptionStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getMollieUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMollieUserId', []);

        return parent::getMollieUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMollieUserId($mollieUserId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMollieUserId', [$mollieUserId]);

        return parent::setMollieUserId($mollieUserId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriptionMandate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriptionMandate', []);

        return parent::getSubscriptionMandate();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubscriptionMandate($subscriptionMandate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubscriptionMandate', [$subscriptionMandate]);

        return parent::setSubscriptionMandate($subscriptionMandate);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriptionActiveTillDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriptionActiveTillDate', []);

        return parent::getSubscriptionActiveTillDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubscriptionActiveTillDate($subscriptionActiveTillDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubscriptionActiveTillDate', [$subscriptionActiveTillDate]);

        return parent::setSubscriptionActiveTillDate($subscriptionActiveTillDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessages', []);

        return parent::getMessages();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessages($messages)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessages', [$messages]);

        return parent::setMessages($messages);
    }

    /**
     * {@inheritDoc}
     */
    public function getMailingSubscription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMailingSubscription', []);

        return parent::getMailingSubscription();
    }

    /**
     * {@inheritDoc}
     */
    public function setMailingSubscription($mailingSubscription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMailingSubscription', [$mailingSubscription]);

        return parent::setMailingSubscription($mailingSubscription);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', [$role]);

        return parent::addRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsernameCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsernameCanonical', []);

        return parent::getUsernameCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCanonical', []);

        return parent::getEmailCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationToken', []);

        return parent::getConfirmationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRole', [$role]);

        return parent::hasRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuperAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuperAdmin', []);

        return parent::isSuperAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function removeRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRole', [$role]);

        return parent::removeRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setUsernameCanonical($usernameCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsernameCanonical', [$usernameCanonical]);

        return parent::setUsernameCanonical($usernameCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setSalt($salt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalt', [$salt]);

        return parent::setSalt($salt);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCanonical($emailCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCanonical', [$emailCanonical]);

        return parent::setEmailCanonical($emailCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$boolean]);

        return parent::setEnabled($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setSuperAdmin($boolean)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuperAdmin', [$boolean]);

        return parent::setSuperAdmin($boolean);
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$password]);

        return parent::setPlainPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(\DateTime $time = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$time]);

        return parent::setLastLogin($time);
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationToken($confirmationToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationToken', [$confirmationToken]);

        return parent::setConfirmationToken($confirmationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordRequestedAt(\DateTime $date = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordRequestedAt', [$date]);

        return parent::setPasswordRequestedAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordRequestedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordRequestedAt', []);

        return parent::getPasswordRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function isPasswordRequestNonExpired($ttl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPasswordRequestNonExpired', [$ttl]);

        return parent::isPasswordRequestNonExpired($ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroups', []);

        return parent::getGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupNames()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupNames', []);

        return parent::getGroupNames();
    }

    /**
     * {@inheritDoc}
     */
    public function hasGroup($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasGroup', [$name]);

        return parent::hasGroup($name);
    }

    /**
     * {@inheritDoc}
     */
    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroup', [$group]);

        return parent::addGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroup', [$group]);

        return parent::removeGroup($group);
    }

}
