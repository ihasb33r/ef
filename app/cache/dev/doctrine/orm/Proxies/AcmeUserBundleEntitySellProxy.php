<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class AcmeUserBundleEntitySellProxy extends \Acme\UserBundle\Entity\Sell implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setQuantity($quantity)
    {
        $this->__load();
        return parent::setQuantity($quantity);
    }

    public function getQuantity()
    {
        $this->__load();
        return parent::getQuantity();
    }

    public function setMinQuantity($minQuantity)
    {
        $this->__load();
        return parent::setMinQuantity($minQuantity);
    }

    public function getMinQuantity()
    {
        $this->__load();
        return parent::getMinQuantity();
    }

    public function setPrice($price)
    {
        $this->__load();
        return parent::setPrice($price);
    }

    public function getPrice()
    {
        $this->__load();
        return parent::getPrice();
    }

    public function setOrigin($origin)
    {
        $this->__load();
        return parent::setOrigin($origin);
    }

    public function getOrigin()
    {
        $this->__load();
        return parent::getOrigin();
    }

    public function setAgor($agor)
    {
        $this->__load();
        return parent::setAgor($agor);
    }

    public function getAgor()
    {
        $this->__load();
        return parent::getAgor();
    }

    public function addbuy(\Acme\UserBundle\Entity\Buy $buy)
    {
        $this->__load();
        return parent::addbuy($buy);
    }

    public function getBuy()
    {
        $this->__load();
        return parent::getBuy();
    }

    public function setLocation(\Acme\UserBundle\Entity\Location $location)
    {
        $this->__load();
        return parent::setLocation($location);
    }

    public function getLocation()
    {
        $this->__load();
        return parent::getLocation();
    }

    public function setUser(\Acme\UserBundle\Entity\User $user)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'quantity', 'min_quantity', 'price', 'origin', 'agor', 'buy', 'location', 'user');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}