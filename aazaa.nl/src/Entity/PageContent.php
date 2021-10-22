<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Gedmo\Sortable\Entity\Repository\SortableRepository")
 * @ORM\Table(name="page_content", indexes={
 *     @ORM\Index(name="template_idx", columns={"template"}),
 *     @ORM\Index(name="paid_idx", columns={"paid"}),
 *     @ORM\Index(name="path_idx", columns={"path"})
 * })
 */
class PageContent {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="template", type="string", nullable=false)
     */
    protected $template;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $active = true;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $paid = true;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $accountRequired = true;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $vimeoId;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PageContentRelations", mappedBy="pageContent")
     * @ORM\OrderBy({"position" = "ASC", "location" = "ASC"})
     */
    protected $pageContentRelations;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $metaTitle;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $metaDescription;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $shortDescription;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $previewTop;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $previewBottom;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PageContentCategory", inversedBy="pageContents")
     * @ORM\JoinColumn(name="page_content_category_id", referencedColumnName="id", nullable=true)
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserWatchLog", mappedBy="pageContent")
     */
    private $watchLog;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UserFavorites", mappedBy="pageContent")
     */
    private $favorites;

    /**
     * @ORM\Column(length=255)
     */
    private $slug;

    /**
     * @Gedmo\Slug(handlers={
     *      @Gedmo\SlugHandler(class="Gedmo\Sluggable\Handler\RelativeSlugHandler", options={
     *          @Gedmo\SlugHandlerOption(name="relationField", value="category"),
     *          @Gedmo\SlugHandlerOption(name="relationSlugField", value="alias"),
     *          @Gedmo\SlugHandlerOption(name="separator", value="/")
     *      })
     * }, separator="-", updatable=true, fields={"title"})
     * @ORM\Column(length=64, unique=false)
     */
    private $path;

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
        $this->pageContentRelations = new ArrayCollection();
        $this->watchLog = new ArrayCollection();
        $this->favorites = new ArrayCollection();
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
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
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
    public function getAccountRequired()
    {
        return $this->accountRequired;
    }

    /**
     * @param mixed $accountRequired
     */
    public function setAccountRequired($accountRequired)
    {
        $this->accountRequired = $accountRequired;
    }

    /**
     * @return mixed
     */
    public function getVimeoId()
    {
        return $this->vimeoId;
    }

    /**
     * @param mixed $vimeoId
     */
    public function setVimeoId($vimeoId)
    {
        $this->vimeoId = $vimeoId;
    }

    /**
     * @return mixed
     */
    public function getPageContentRelations()
    {
        return $this->pageContentRelations;
    }

    /**
     * @param mixed $pageContentRelations
     */
    public function setPageContentRelations($pageContentRelations)
    {
        $this->pageContentRelations = $pageContentRelations;
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
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param mixed $metaDescription
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param mixed $shortDescription
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
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
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * @param mixed $metaTitle
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;
    }

    /**
     * @return mixed
     */
    public function getPreviewTop()
    {
        return $this->previewTop;
    }

    /**
     * @param mixed $previewTop
     */
    public function setPreviewTop($previewTop)
    {
        $this->previewTop = $previewTop;
    }

    /**
     * @return mixed
     */
    public function getPreviewBottom()
    {
        return $this->previewBottom;
    }

    /**
     * @param mixed $previewBottom
     */
    public function setPreviewBottom($previewBottom)
    {
        $this->previewBottom = $previewBottom;
    }

}