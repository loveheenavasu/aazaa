<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Workshop extends \App\Entity\Workshop implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'descriptionShort', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'startDatetime', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'endDatetime', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'seats', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'active', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'userWorkshop', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'location', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'videoChatSessionId', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'created', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'updated'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'type', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'descriptionShort', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'startDatetime', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'endDatetime', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'seats', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'slug', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'active', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'userWorkshop', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'location', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'videoChatSessionId', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'created', '' . "\0" . 'App\\Entity\\Workshop' . "\0" . 'updated'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Workshop $proxy) {
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
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionShort()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionShort', []);

        return parent::getDescriptionShort();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionShort($descriptionShort)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionShort', [$descriptionShort]);

        return parent::setDescriptionShort($descriptionShort);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartDatetime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDatetime', []);

        return parent::getStartDatetime();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartDatetime($startDatetime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartDatetime', [$startDatetime]);

        return parent::setStartDatetime($startDatetime);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndDatetime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndDatetime', []);

        return parent::getEndDatetime();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndDatetime($endDatetime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndDatetime', [$endDatetime]);

        return parent::setEndDatetime($endDatetime);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeats()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeats', []);

        return parent::getSeats();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeats($seats)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeats', [$seats]);

        return parent::setSeats($seats);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeatsAvailable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeatsAvailable', []);

        return parent::getSeatsAvailable();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice($type = 0)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', [$type]);

        return parent::getPrice($type);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice($price)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserWorkshops()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserWorkshops', []);

        return parent::getUserWorkshops();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserWorkshops($userWorkshops)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserWorkshops', [$userWorkshops]);

        return parent::setUserWorkshops($userWorkshops);
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
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocation', []);

        return parent::getLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocation($location)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocation', [$location]);

        return parent::setLocation($location);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserWorkshop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserWorkshop', []);

        return parent::getUserWorkshop();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserWorkshop($userWorkshop): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserWorkshop', [$userWorkshop]);

        parent::setUserWorkshop($userWorkshop);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideoChatSessionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideoChatSessionId', []);

        return parent::getVideoChatSessionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setVideoChatSessionId($videoChatSessionId): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideoChatSessionId', [$videoChatSessionId]);

        parent::setVideoChatSessionId($videoChatSessionId);
    }

}