<?php

class Paginator_f262b94 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderb85dc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer35e57 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa5744 = [
        
    ];

    public function setDefaultPaginatorOptions(array $options)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->setDefaultPaginatorOptions($options);
    }

    public function paginate($target, $page = 1, $limit = 10, array $options = [])
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->paginate($target, $page, $limit, $options);
    }

    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->subscribe($subscriber);
    }

    public function connect($eventName, $listener, $priority = 0)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->connect($eventName, $listener, $priority);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        unset($instance->eventDispatcher, $instance->defaultOptions);

        $instance->initializer35e57 = $initializer;

        return $instance;
    }

    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null)
    {
        static $reflection;

        if (! $this->valueHolderb85dc) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHolderb85dc = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions);

        }

        $this->valueHolderb85dc->__construct($eventDispatcher);
    }

    public function & __get($name)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, '__get', ['name' => $name], $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        if (isset(self::$publicPropertiesa5744[$name])) {
            return $this->valueHolderb85dc->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb85dc;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderb85dc;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb85dc;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderb85dc;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, '__isset', array('name' => $name), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb85dc;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderb85dc;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, '__unset', array('name' => $name), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb85dc;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderb85dc;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, '__clone', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        $this->valueHolderb85dc = clone $this->valueHolderb85dc;
    }

    public function __sleep()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, '__sleep', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return array('valueHolderb85dc');
    }

    public function __wakeup()
    {
        unset($this->eventDispatcher, $this->defaultOptions);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer35e57 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer35e57;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'initializeProxy', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb85dc;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderb85dc;
    }


}
