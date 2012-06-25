<?php
// src/Acme/UserBundle/Entity/User.php

namespace Acme\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length="255")
     *
     * @Assert\NotBlank(message="Please enter your name.", groups={"Registration", "Profile"})
     * @Assert\MinLength(limit="3", message="The name is too short.", groups={"Registration", "Profile"})
     * @Assert\MaxLength(limit="255", message="The name is too long.", groups={"Registration", "Profile"})
     */
    protected $name;
	    /**
     * @ORM\Column(type="string", length="255")
     *
     * @Assert\NotBlank(message="Please enter your lastname.", groups={"Registration", "Profile"})
     * @Assert\MinLength(limit="3", message="The name is too short.", groups={"Registration", "Profile"})
     * @Assert\MaxLength(limit="255", message="The lastname is too long.", groups={"Registration", "Profile"})
     */
    protected $lastname;
		    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\NotBlank(message="Please enter your phone.", groups={"Registration", "Profile"})
     * @Assert\MinLength(limit="5", message="The phone is too short.", groups={"Registration", "Profile"})
     * @Assert\MaxLength(limit="20", message="The phone is too long.", groups={"Registration", "Profile"})
     */
    protected $phone;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Get phone            
     *h
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * @ORM\OneToMany(targetEntity="Sell", mappedBy="user", cascade={"persist","remove","merge"})
     */
    protected $sell;

    
    /**
     * @ORM\OneToMany(targetEntity="Buy", mappedBy="user")
     */
    protected $buy;
    /**
	     * @ORM\OneToMany(targetEntity="Rate", mappedBy="user")
	     */
    protected $rate;
    /**
	     * @ORM\OneToMany(targetEntity="Rate", mappedBy="candidate")
	     */
    protected $vote;

 /**
     * @var string $newsletterSubscription
     *
     * @ORM\Column(name="newsletterSubscription", type="boolean", nullable=true)
     */
    private $newsletterSubscription=true; 
    /**
     * Add sell
     *
     * @param Acme\UserBundle\Entity\Sell $sell
     */
    public function addSell(\Acme\UserBundle\Entity\Sell $sell)
    {
        $this->sell[] = $sell;
    }

    /**
     * Get sell
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSell()
    {
        return $this->sell;
    }

    /**
     * Add buy
     *
     * @param Acme\UserBundle\Entity\Buy $buy
     */
    public function addBuy(\Acme\UserBundle\Entity\Buy $buy)
    {
        $this->buy[] = $buy;
    }

    /**
     * Get buy
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getBuy()
    {
        return $this->buy;
    }

    /**
     * Add rate
     *
     * @param Acme\UserBundle\Entity\Rate $rate
     */
    public function addRate(\Acme\UserBundle\Entity\Rate $rate)
    {
        $this->rate[] = $rate;
    }

    /**
     * Get rate
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRate()
    {
        return $this->rate;
    }
	/**
     * @ORM\OneToMany(targetEntity="Location", mappedBy="user")
     */
    protected $location;
 /**
     * @ORM\OneToMany(targetEntity="Sellbusiness", mappedBy="user")
     */
    protected $sellbusiness;
    

    /**
     * Add location
     *
     * @param Acme\UserBundle\Entity\Location $location
     */
    public function addLocation(\Acme\UserBundle\Entity\Location $location)
    {
        $this->location[] = $location;
    }

    /**
     * Get location
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLocation()
    {
        return $this->location;
    }
	 /**
     * @ORM\OneToMany(targetEntity="Business", mappedBy="user")
     */
    protected $business;

   

    /**
     * Add business
     *
     * @param Acme\UserBundle\Entity\Business $business
     */
    public function addBusiness(\Acme\UserBundle\Entity\Business $business)
    {
        $this->business[] = $business;
    }

    /**
     * Get business
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * Add sellbusiness
     *
     * @param Acme\UserBundle\Entity\Sellbusiness $sellbusiness
     */
    public function addSellbusiness(\Acme\UserBundle\Entity\Sellbusiness $sellbusiness)
    {
        $this->sellbusiness[] = $sellbusiness;
    }

    /**
     * Get sellbusiness
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSellbusiness()
    {
        return $this->sellbusiness;
    }

    /**
     * Set newsletterSubscription
     *
     * @param boolean $newsletterSubscription
     */
    public function setNewsletterSubscription($newsletterSubscription)
    {
        $this->newsletterSubscription = $newsletterSubscription;
    }

    /**
     * Get newsletterSubscription
     *
     * @return boolean 
     */
    public function getNewsletterSubscription()
    {
        return $this->newsletterSubscription;
    }

    /**
     * Get vote
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getVote()
    {
        return $this->vote;
    }
}