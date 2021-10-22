<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_workshops")
 */
class UserWorkshop
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="workshops")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Workshop", inversedBy="userWorkshop")
     * @ORM\JoinColumn(name="workshop_id", referencedColumnName="id", nullable=false)
     */
    private $workshop;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserPayments", mappedBy="userWorkshop")
     * @ORM\OrderBy({"paid" = "DESC"})
     */
    private $userPayments;

    /**
     * @ORM\Column(type="integer", name="payment_type", nullable=false)
     */
    private $paymentType = 0;

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


    public function __construct()
    {
        $this->userPayments = new ArrayCollection();
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
     * @return Workshop
     */
    public function getWorkshop()
    {
        return $this->workshop;
    }

    /**
     * @param mixed $workshop
     */
    public function setWorkshop($workshop)
    {
        $this->workshop = $workshop;
    }

    /**
     * @return bool
     */
    public function getPaid()
    {
        $workshop = $this->getWorkshop();
        if(!$workshop->getPrice()) {
            return true;
        }
        else {
            $price = $workshop->getPrice($this->paymentType);
            foreach ($this->getUserPayments() as $payment) {
                if ($payment->getPaid()) {
                    $price =  $price - $payment->getAmount();
                }
            }
            if($price == 0){
                return true;
            }
        }
        return false;
    }

    /**
     * @return mixed
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param mixed $paymentType
     */
    public function setPaymentType($paymentType): void
    {
        $this->paymentType = $paymentType;
    }


    /**
     * @return ArrayCollection
     */
    public function getUserPayments()
    {
        return $this->userPayments;
    }

    /**
     * @param mixed $userPayments
     */
    public function setUserPayments($userPayments)
    {
        $this->userPayments = $userPayments;
    }

}