<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid as Ramsey;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="user", indexes={
 *     @ORM\Index(name="email_idx", columns={"email"}),
 *     @ORM\Index(name="email_canonical_idx", columns={"email_canonical"}),
 *     @ORM\Index(name="subscription_active_till_date_idx", columns={"subscription_active_till_date"}),
 *     @ORM\Index(name="username_idx", columns={"username"}),
 *     @ORM\Index(name="username_canonical_idx", columns={"username_canonical"})
 * })
 */

class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $gender;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $firstname;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $tokenLogin;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserWatchLog", mappedBy="user")
     */
    private $watchLog;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserWorkshop", mappedBy="user")
     */
    private $workshops;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserFavorites", mappedBy="user")
     */
    private $favorites;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserMessage", mappedBy="user")
     */
    private $messages;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserPayments", mappedBy="user")
     * @ORM\OrderBy({"paid" = "DESC", "activeTill" = "DESC"})
     */
    private $payments;

    /**
     * @ORM\Column(type="string", name="user_mollie_id", nullable=true)
     */
    private $mollieUserId;

    /**
     * @ORM\Column(type="string", name="subscription_mollie_id", nullable=true)
     */
    private $subscriptionId;

    /**
     * @ORM\Column(type="string", name="subscription_status", nullable=true)
     */
    private $subscriptionStatus;

    /**
     * @ORM\Column(type="boolean", name="subscription_active", nullable=false)
     */
    private $subscriptionActive = false;

    /**
     * @ORM\Column(type="datetime", name="subscription_cancelled_date", nullable=true)
     */
    private $subscriptionCancelledDate;

    /**
     * @ORM\Column(type="string", name="subscription_mandate", nullable=true)
     */
    private $subscriptionMandate;

    /**
     * @ORM\Column(type="datetime", name="subscription_active_till_date", nullable=true)
     */
    private $subscriptionActiveTillDate;

    /**
     * @ORM\Column(type="boolean", name="mailing_subscription", nullable=false)
     */
    private $mailingSubscription = false;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;


    public function __construct()
    {
        parent::__construct();
        $this->tokenLogin = Ramsey::uuid4();
        $this->watchLog = new ArrayCollection();
        $this->payments = new ArrayCollection();
        $this->workshops = new ArrayCollection();
        $this->favorites = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->enabled = false;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @param mixed $payments
     */
    public function setPayments($payments)
    {
        $this->payments = $payments;
    }

    /**
     * @return mixed
     */
    public function getTokenLogin()
    {
        return $this->tokenLogin;
    }

    /**
     * @param mixed $tokenLogin
     */
    public function setTokenLogin($tokenLogin)
    {
        $this->tokenLogin = $tokenLogin;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getName(){
        $name = '';
        if(trim($this->firstname) != ''){
            $name .= $this->firstname . ' ';
        }
        if(trim($this->lastname) != ''){
            $name .= $this->lastname . ' ';
        }
        return $name;
    }
    /**
     * @return mixed
     */
    public function getWatchLog()
    {
        return $this->watchLog;
    }

    /**
     * @param mixed $watchLog
     */
    public function setWatchLog($watchLog)
    {
        $this->watchLog = $watchLog;
    }

    /**
     * @return mixed
     */
    public function getFavorites()
    {
        return $this->favorites;
    }

    /**
     * @param mixed $favorites
     */
    public function setFavorites($favorites)
    {
        $this->favorites = $favorites;
    }

    /**
     * @return ArrayCollection
     */
    public function getWorkshops()
    {
        return $this->workshops;
    }

    /**
     * @param mixed $workshops
     */
    public function setWorkshops($workshops)
    {
        $this->workshops = $workshops;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @param mixed $subscriptionId
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionActive()
    {
        return $this->subscriptionActive;
    }

    /**
     * @param mixed $subscriptionActive
     */
    public function setSubscriptionActive($subscriptionActive)
    {
        $this->subscriptionActive = $subscriptionActive;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionCancelledDate()
    {
        return $this->subscriptionCancelledDate;
    }

    /**
     * @param mixed $subscriptionCancelledDate
     */
    public function setSubscriptionCancelledDate($subscriptionCancelledDate)
    {
        $this->subscriptionCancelledDate = $subscriptionCancelledDate;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionStatus()
    {
        return $this->subscriptionStatus;
    }

    /**
     * @param mixed $subscriptionStatus
     */
    public function setSubscriptionStatus($subscriptionStatus)
    {
        $this->subscriptionStatus = $subscriptionStatus;
    }

    /**
     * @return mixed
     */
    public function getMollieUserId()
    {
        return $this->mollieUserId;
    }

    /**
     * @param mixed $mollieUserId
     */
    public function setMollieUserId($mollieUserId)
    {
        $this->mollieUserId = $mollieUserId;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionMandate()
    {
        return $this->subscriptionMandate;
    }

    /**
     * @param mixed $subscriptionMandate
     */
    public function setSubscriptionMandate($subscriptionMandate)
    {
        $this->subscriptionMandate = $subscriptionMandate;
    }

    /**
     * @return mixed
     */
    public function getSubscriptionActiveTillDate()
    {
        return $this->subscriptionActiveTillDate;
    }

    /**
     * @param mixed $subscriptionActiveTillDate
     */
    public function setSubscriptionActiveTillDate($subscriptionActiveTillDate)
    {
        $this->subscriptionActiveTillDate = $subscriptionActiveTillDate;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }


    /**
     * @return mixed
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param mixed $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }

    /**
     * @return mixed
     */
    public function getMailingSubscription()
    {
        return $this->mailingSubscription;
    }

    /**
     * @param mixed $mailingSubscription
     */
    public function setMailingSubscription($mailingSubscription)
    {
        $this->mailingSubscription = $mailingSubscription;
    }
}