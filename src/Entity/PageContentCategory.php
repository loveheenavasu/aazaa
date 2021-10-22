<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PageContentCategoryRepository")
 * @ORM\Table(name="page_content_category", indexes={
 *     @ORM\Index(name="name_idx", columns={"name"}),
 *     @ORM\Index(name="view_position_idx", columns={"view_position"})
 * })
 */
class PageContentCategory
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $name;

    /**
     * @Gedmo\SortableGroup
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $viewPosition;

    /**
     * @Gedmo\SortablePosition
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PageContent", mappedBy="category")
     */
    private $pageContents;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\PageContent")
     * @ORM\JoinColumn(name="page_content_id", referencedColumnName="id")
     */
    private $pageContent;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     */
    protected $cssFilter;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $image;


    /**
     * @Gedmo\Slug(handlers={
     *      @Gedmo\SlugHandler(class="Gedmo\Sluggable\Handler\InversedRelativeSlugHandler", options={
     *          @Gedmo\SlugHandlerOption(name="relationClass", value="App\Entity\PageContent"),
     *          @Gedmo\SlugHandlerOption(name="mappedBy", value="category"),
     *          @Gedmo\SlugHandlerOption(name="inverseSlugField", value="path")
     *      })
     * }, separator="-", updatable=true, fields={"name"})
     * @ORM\Column(length=64)
     */
    private $alias;


    public function __construct()
    {
        $this->pageContents = new ArrayCollection();
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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

    /**
     * @return mixed
     */
    public function getPageContents()
    {
        return $this->pageContents;
    }

    /**
     * @param mixed $pageContents
     */
    public function setPageContents($pageContents)
    {
        $this->pageContents = $pageContents;
    }

    /**
     * @return mixed
     */
    public function getViewPosition()
    {
        return $this->viewPosition;
    }

    /**
     * @param mixed $viewPosition
     */
    public function setViewPosition($viewPosition)
    {
        $this->viewPosition = $viewPosition;
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
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param mixed $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * @return mixed
     */
    public function getCssFilter()
    {
        return $this->cssFilter;
    }

    /**
     * @param mixed $cssFilter
     */
    public function setCssFilter($cssFilter)
    {
        $this->cssFilter = $cssFilter;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }



}