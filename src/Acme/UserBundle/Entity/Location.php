<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Product
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Location
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", scale="7")
     */
    protected $latitude;

    /**
     * @ORM\Column(type="decimal", scale="7")
     */
    protected $longitude;
    /**
     * @var string $address
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;
	   /**
     * @var string $town
     *
     * @ORM\Column(name="town", type="string", length=255)
     */
    private $town;

     /**
     * @var string $postalcode
     *
     * @ORM\Column(name="postalcode", type="string", length=255)
     */
    private $postalcode;

	
    /**
     * @var date $date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


    /**
     * @var string $organiser
     *
     * @ORM\Column(name="organiser", type="string", length=255)
     */
    private $organiser;
	 /**
     * @var string $approved
     *
     * @ORM\Column(name="approved", type="boolean", nullable=true)
     */
    private $approved; 
	/**
     * @var string $public
     *
     * @ORM\Column(name="public", type="boolean")
     */
    private $public;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $extrainfo
     *
     * @ORM\Column(name="extrainfo", type="string", length=255)
     */
    private $extrainfo;


    /**
     * @var string $phone
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var time $starttime
     *
     * @ORM\Column(name="starttime", type="time")
     */
    private $starttime;

    /**
     * @var time $endtime
     *
     * @ORM\Column(name="endtime", type="time")
     */
    private $endtime;


    /**
     * Notice the latitude property must have a setter
     */
    public function setLatitude($value)
    {
        $this->latitude = $value;
    }

    /**
     * Notice the longitude property must have a setter
     */
    public function setLongitude($value)
    {
        $this->longitude = $value;
    }



    /**
     * Get latitude
     *
     * @return decimal 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Get longitude
     *
     * @return decimal 
     */
    public function getLongitude()
    {
        return $this->longitude;
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
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;

    }
    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="location")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    protected $product;


    /**
     * Set product
     *
     * @param Acme\UserBundle\Entity\Product $product
     */
    public function setProduct(\Acme\UserBundle\Entity\Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get product
     *
     * @return Acme\UserBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }



    /**
     * Set organiser
     *
     * @param string $organiser
     */
    public function setOrganiser($organiser)
    {
        $this->organiser = $organiser;
    }

    /**
     * Get organiser
     *
     * @return string 
     */
    public function getOrganiser()
    {
        return $this->organiser;
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
     * Set extrainfo
     *
     * @param string $extrainfo
     */
    public function setExtrainfo($extrainfo)
    {
        $this->extrainfo = $extrainfo;
    }

    /**
     * Get extrainfo
     *
     * @return string 
     */
    public function getExtrainfo()
    {
        return $this->extrainfo;
    }

    /**
     * Set phone
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }


    /**
     * Set starttime
     *
     * @param time $starttime
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;
    }

    /**
     * Get starttime
     *
     * @return time 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param time $endtime
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;
    }

    /**
     * Get endtime
     *
     * @return time 
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set public
     *
     * @param boolean $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }
/**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="location")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
	 protected $user;

    /**
     * Set user
     *
     * @param Acme\UserBundle\Entity\User $user
     */
    public function setUser(\Acme\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Acme\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set town
     *
     * @param string $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * Get town
     *
     * @return string 
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set postalcode
     *
     * @param string $postalcode
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
    }

    /**
     * Get postalcode
     *
     * @return string 
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }
}