<?php

namespace ContainerXTpQRhh;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd5e2e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer37dd6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd3c0e = [
        
    ];

    public function getConnection()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getConnection', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getMetadataFactory', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getExpressionBuilder', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'beginTransaction', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getCache', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'transactional', array('func' => $func), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'commit', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->commit();
    }

    public function rollback()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'rollback', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getClassMetadata', array('className' => $className), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'createQuery', array('dql' => $dql), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'createNamedQuery', array('name' => $name), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'createQueryBuilder', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'flush', array('entity' => $entity), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'clear', array('entityName' => $entityName), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->clear($entityName);
    }

    public function close()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'close', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->close();
    }

    public function persist($entity)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'persist', array('entity' => $entity), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'remove', array('entity' => $entity), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'refresh', array('entity' => $entity), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'detach', array('entity' => $entity), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'merge', array('entity' => $entity), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'contains', array('entity' => $entity), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getEventManager', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getConfiguration', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'isOpen', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getUnitOfWork', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getProxyFactory', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'initializeObject', array('obj' => $obj), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'getFilters', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'isFiltersStateClean', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'hasFilters', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return $this->valueHolderd5e2e->hasFilters();
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
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer37dd6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd5e2e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd5e2e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd5e2e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, '__get', ['name' => $name], $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        if (isset(self::$publicPropertiesd3c0e[$name])) {
            return $this->valueHolderd5e2e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5e2e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd5e2e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5e2e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd5e2e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, '__isset', array('name' => $name), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5e2e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd5e2e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, '__unset', array('name' => $name), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd5e2e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd5e2e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, '__clone', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        $this->valueHolderd5e2e = clone $this->valueHolderd5e2e;
    }

    public function __sleep()
    {
        $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, '__sleep', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;

        return array('valueHolderd5e2e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer37dd6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer37dd6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer37dd6 && ($this->initializer37dd6->__invoke($valueHolderd5e2e, $this, 'initializeProxy', array(), $this->initializer37dd6) || 1) && $this->valueHolderd5e2e = $valueHolderd5e2e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd5e2e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd5e2e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
