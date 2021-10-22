<?php

namespace App\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_payments", indexes={
 *     @ORM\Index(name="mollie_id_idx", columns={"mollie_id"}),
 *     @ORM\Index(name="status_idx", columns={"status"}),
 *     @ORM\Index(name="amount_idx", columns={"amount"}),
 *     @ORM\Index(name="paid_idx", columns={"paid"})
 * })
 */
class UserPayments
{
    Const PAID = 'Betaald';
    Const CANCELED = 'Geanulleerd';
    Const FAILED = 'Mislukt';
    Const EXPIRED = 'Verlopen';
    Const REFUND = 'Terug betaald';
    Const CHARGEDBACK = 'Verzoek tot terugbetalen';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="payments")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UserWorkshop", inversedBy="userPayments")
     * @ORM\JoinColumn(name="user_workshop_id", referencedColumnName="id", nullable=true)
     */
    private $userWorkshop;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(name="mollie_id",type="string", nullable=true)
     */
    private $mollieId;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $amount;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $paymentUrl;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $paid = false;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $activeTill;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getMollieId()
    {
        return $this->mollieId;
    }

    /**
     * @param mixed $mollieId
     */
    public function setMollieId($mollieId)
    {
        $this->mollieId = $mollieId;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * @param mixed $paid
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @return mixed
     */
    public function getActiveTill()
    {
        return $this->activeTill;
    }

    /**
     * @param mixed $activeTill
     */
    public function setActiveTill($activeTill)
    {
        $this->activeTill = $activeTill;
    }

    /**
     * @return UserWorkshop
     */
    public function getUserWorkshop()
    {
        return $this->userWorkshop;
    }

    /**
     * @param $userWorkshop
     */
    public function setUserWorkshop($userWorkshop)
    {
        $this->userWorkshop = $userWorkshop;
    }

    /**
     * @return mixed
     */
    public function getPaymentUrl()
    {
        return $this->paymentUrl;
    }

    /**
     * @param mixed $paymentUrl
     */
    public function setPaymentUrl($paymentUrl): void
    {
        $this->paymentUrl = $paymentUrl;
    }


}