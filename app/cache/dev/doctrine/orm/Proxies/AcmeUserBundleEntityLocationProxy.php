<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class AcmeUserBundleEntityLocationProxy extends \Acme\UserBundle\Entity\Location implements \Doctrine\ORM\Proxy\Proxy
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
    
    
    public function setLatitude($value)
    {
        $this->__load();
        return parent::setLatitude($value);
    }

    public function setLongitude($value)
    {
        $this->__load();
        return parent::setLongitude($value);
    }

    public function getLatitude()
    {
        $this->__load();
        return parent::getLatitude();
    }

    public function getLongitude()
    {
        $this->__load();
        return parent::getLongitude();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setAddress($address)
    {
        $this->__load();
        return parent::setAddress($address);
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function setProduct(\Acme\UserBundle\Entity\Product $product)
    {
        $this->__load();
        return parent::setProduct($product);
    }

    public function getProduct()
    {
        $this->__load();
        return parent::getProduct();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'latitude', 'longitude', 'address', 'date', 'product');
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