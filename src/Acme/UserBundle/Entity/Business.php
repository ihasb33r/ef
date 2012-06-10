<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Business
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Business
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
     * @var string $business_name
     *
     * @ORM\Column(name="business_name", type="string", length=255)
     */
    private $business_name;

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
     * @var integer $postal
     *
     * @ORM\Column(name="postal", type="integer")
     */
    private $postal;

    /**
     * @var integer $phone
     *
     * @ORM\Column(name="phone", type="integer")
     */
    private $phone;

    /**
     * @var string $amount
     *
     * @ORM\Column(name="amount", type="float")
     */
   
    private $amount;

    /**
     * @var string $extra
     *
     * @ORM\Column(name="extra", type="string", length=255)
     */
    private $extra;


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
     * Set business_name
     *
     * @param string $businessName
     */
    public function setBusinessName($businessName)
    {
        $this->business_name = $businessName;
    }

    /**
     * Get business_name
     *
     * @return string 
     */
    public function getBusinessName()
    {
        return $this->business_name;
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
     * Set postal
     *
     * @param integer $postal
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;
    }

    /**
     * Get postal
     *
     * @return integer 
     */
    public function getPostal()
    {
        return $this->postal;
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
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }
 /**
     * @var string $approved
     *
     * @ORM\Column(name="approved", type="boolean")
     */
    private $approved; 

    /**
     * Set amount
     *
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }


	 /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="business")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
		 /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="business")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    protected $product;

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
     * Set extra
     *
     * @param string $extra
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;
    }

    /**
     * Get extra
     *
     * @return string 
     */
    public function getExtra()
    {
        return $this->extra;
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
     * @ORM\OneToMany(targetEntity="Sellbusiness", mappedBy="business")
     */
    protected $sellbusiness;
    public function __construct()
    {
        $this->sellbusiness = new \Doctrine\Common\Collections\ArrayCollection();
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
}