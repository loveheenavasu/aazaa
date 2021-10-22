<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Gedmo\Sortable\Entity\Repository\SortableRepository")
 * @ORM\Table(name="page_content_relations", indexes={
 *     @ORM\Index(name="location_idx", columns={"location"}),
 *     @ORM\Index(name="position_idx", columns={"position"}),
 *     @ORM\Index(name="page_content_id_idx", columns={"page_content_id"})
 * })
 */
class PageContentRelations
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PageContent")
     * @ORM\JoinColumn(name="page_content_linked", referencedColumnName="id")
     */
    private $pageContentLinked;

    /**
     * @Gedmo\SortableGroup
     * @ORM\ManyToOne(targetEntity="App\Entity\PageContent", inversedBy="pageContentRelations")
     * @ORM\JoinColumn(name="page_content_id", referencedColumnName="id")
     */
    protected $pageContent;

    /**
     * @Gedmo\SortableGroup
     * @ORM\Column(name="location", type="string", length=128)
     */
    private $location;

    /**
     * @Gedmo\SortablePosition
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;


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
    public function getPageContentLinked()
    {
        return $this->pageContentLinked;
    }

    /**
     * @param mixed $pageContentLinked
     */
    public function setPageContentLinked($pageContentLinked)
    {
        $this->pageContentLinked = $pageContentLinked;
    }

    /**
     * @return mixed
     */
    public function getPageContent()
    {
        return $this->pageContent;
    }

    /**
     * @param mixed $pageContent
     */
    public function setPageContent($pageContent)
    {
        $this->pageContent = $pageContent;
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
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

}