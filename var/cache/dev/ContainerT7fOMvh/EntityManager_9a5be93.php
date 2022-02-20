<?php

namespace ContainerT7fOMvh;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderee1fc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera56f5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties985ed = [
        
    ];

    public function getConnection()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getConnection', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getMetadataFactory', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getExpressionBuilder', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'beginTransaction', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getCache', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getCache();
    }

    public function transactional($func)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'transactional', array('func' => $func), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'wrapInTransaction', array('func' => $func), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'commit', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->commit();
    }

    public function rollback()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'rollback', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getClassMetadata', array('className' => $className), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'createQuery', array('dql' => $dql), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'createNamedQuery', array('name' => $name), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'createQueryBuilder', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'flush', array('entity' => $entity), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'clear', array('entityName' => $entityName), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->clear($entityName);
    }

    public function close()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'close', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->close();
    }

    public function persist($entity)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'persist', array('entity' => $entity), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'remove', array('entity' => $entity), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'refresh', array('entity' => $entity), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'detach', array('entity' => $entity), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'merge', array('entity' => $entity), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getRepository', array('entityName' => $entityName), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'contains', array('entity' => $entity), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getEventManager', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getConfiguration', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'isOpen', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getUnitOfWork', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getProxyFactory', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'initializeObject', array('obj' => $obj), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'getFilters', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'isFiltersStateClean', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'hasFilters', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return $this->valueHolderee1fc->hasFilters();
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

        $instance->initializera56f5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderee1fc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderee1fc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderee1fc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, '__get', ['name' => $name], $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        if (isset(self::$publicProperties985ed[$name])) {
            return $this->valueHolderee1fc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee1fc;

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

        $targetObject = $this->valueHolderee1fc;
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
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee1fc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderee1fc;
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
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, '__isset', array('name' => $name), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee1fc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderee1fc;
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
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, '__unset', array('name' => $name), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee1fc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderee1fc;
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
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, '__clone', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        $this->valueHolderee1fc = clone $this->valueHolderee1fc;
    }

    public function __sleep()
    {
        $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, '__sleep', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;

        return array('valueHolderee1fc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera56f5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera56f5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera56f5 && ($this->initializera56f5->__invoke($valueHolderee1fc, $this, 'initializeProxy', array(), $this->initializera56f5) || 1) && $this->valueHolderee1fc = $valueHolderee1fc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderee1fc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderee1fc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
