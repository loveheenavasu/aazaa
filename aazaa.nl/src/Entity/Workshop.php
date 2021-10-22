<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WorkshopRepository")
 * @ORM\Table(name="workshops", indexes={
 *     @ORM\Index(name="title_idx", columns={"title"}),
 *     @ORM\Index(name="slug_idx", columns={"slug"}),
 *     @ORM\Index(name="startDatetime_idx", columns={"start_datetime"}),
 *     @ORM\Index(name="endDatetime_idx", columns={"end_datetime"}),
 *     @ORM\Index(name="active_idx", columns={"active"})
 * })
 */

class Workshop {

    const WORKSHOP = 'workshop';
    const CURSUS = 'cursus';
    const SESSION = 'sessie';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(name="type_workshop", type="string", nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionShort;

    /**
     * @ORM\Column(name="start_datetime", type="datetime", nullable=true)
     */
    private $startDatetime;

    /**
     * @ORM\Column(name="end_datetime", type="datetime", nullable=true)
     */
    private $endDatetime;

    /**
     * @ORM\Column(type="integer", nullable=true)`
     */
    private $seats;

    /**
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $price;

    /**
     * @Gedmo\Slug(fields={"id","title"}, style="lower", updatable=true)
     * @ORM\Column(length=255, unique=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active = true;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserWorkshop", mappedBy="workshop")
     */
    private $userWorkshop;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\WorkshopLocation", inversedBy="workshops")
     * @ORM\JoinColumn(name="location_id", referencedColumnName="id", nullable=true)
     */
    private $location;

    /**
     * @ORM\Column(type="string", name="video_chat_session_id", nullable=true)
     */
    private $videoChatSessionId;


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
        $this->userWorkshops = new ArrayCollection();
        $this->location = new ArrayCollection();
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescriptionShort()
    {
        return $this->descriptionShort;
    }

    /**
     * @param mixed $descriptionShort
     */
    public function setDescriptionShort($descriptionShort)
    {
        $this->descriptionShort = $descriptionShort;
    }

    /**
     * @return mixed
     */
    public function getStartDatetime()
    {
        return $this->startDatetime;
    }

    /**
     * @param mixed $startDatetime
     */
    public function setStartDatetime($startDatetime)
    {
        $this->startDatetime = $startDatetime;
    }

    /**
     * @return mixed
     */
    public function getEndDatetime()
    {
        return $this->endDatetime;
    }

    /**
     * @param mixed $endDatetime
     */
    public function setEndDatetime($endDatetime)
    {
        $this->endDatetime = $endDatetime;
    }


    /**
     * @return mixed
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * @param mixed $seats
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;
    }

    /**
     * @return mixed
     */
    public function getSeatsAvailable()
    {
        $count = 0;
        /** @var UserWorkshop $wp */
        foreach($this->userWorkshop as $wp){
            if($wp->getPaid()){
                $count++;
            }
        }

        return $this->seats - $count;
    }

    /**
     * @param int $type
     * @return float
     */
    public function getPrice($type = 0)
    {
        $price = $this->price;

        switch ($type){
            case 0:
                break;
            case 1:
                $price = $price * 0.75;
                break;
            case 2:
                $price = $price * 0.5;
                break;
        }
        return $price;

    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getUserWorkshops()
    {
        return $this->userWorkshops;
    }

    /**
     * @param mixed $userWorkshops
     */
    public function setUserWorkshops($userWorkshops)
    {
        $this->userWorkshops = $userWorkshops;
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
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getUserWorkshop()
    {
        return $this->userWorkshop;
    }

    /**
     * @param mixed $userWorkshop
     */
    public function setUserWorkshop($userWorkshop): void
    {
        $this->userWorkshop = $userWorkshop;
    }

    /**
     * @return mixed
     */
    public function getVideoChatSessionId()
    {
        return $this->videoChatSessionId;
    }

    /**
     * @param mixed $videoChatSessionId
     */
    public function setVideoChatSessionId($videoChatSessionId): void
    {
        $this->videoChatSessionId = $videoChatSessionId;
    }


}