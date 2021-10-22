<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function getConnection()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getConnection', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getMetadataFactory', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getExpressionBuilder', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'beginTransaction', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getCache', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'transactional', array('func' => $func), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->transactional($func);
    }

    public function commit()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'commit', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->commit();
    }

    public function rollback()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'rollback', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getClassMetadata', array('className' => $className), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'createQuery', array('dql' => $dql), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'createNamedQuery', array('name' => $name), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'createQueryBuilder', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'flush', array('entity' => $entity), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'clear', array('entityName' => $entityName), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->clear($entityName);
    }

    public function close()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'close', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->close();
    }

    public function persist($entity)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'persist', array('entity' => $entity), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'remove', array('entity' => $entity), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'refresh', array('entity' => $entity), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'detach', array('entity' => $entity), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'merge', array('entity' => $entity), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'contains', array('entity' => $entity), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getEventManager', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getConfiguration', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'isOpen', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getUnitOfWork', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getProxyFactory', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'initializeObject', array('obj' => $obj), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'getFilters', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'isFiltersStateClean', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer35e57 && ($this->initializer35e57->__invoke($valueHolderb85dc, $this, 'hasFilters', array(), $this->initializer35e57) || 1) && $this->valueHolderb85dc = $valueHolderb85dc;

        return $this->valueHolderb85dc->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer35e57 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb85dc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb85dc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb85dc->__construct($conn, $config, $eventManager);
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
