<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Sell
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Sell
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
     * @var integer $quantity
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var integer $min_quantity
     *
     * @ORM\Column(name="min_quantity", type="integer")
     */
    private $min_quantity;

    /**
     * @var float $price
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var string $origin
     *
     * @ORM\Column(name="origin", type="string", length=255)
     */
    private $origin;
    /**
     * @var integer $agor
     *
     * @ORM\Column(name="agor", type="integer")
     */
    private $agor;

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
     * @var string $approved
     *
     * @ORM\Column(name="approved", type="boolean", nullable=true)
     */
    private $approved; 
    /**
     * Set quantity
     *
     * @param integer $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set min_quantity
     *
     * @param integer $minQuantity
     */
    public function setMinQuantity($minQuantity)
    {
        $this->min_quantity = $minQuantity;
    }

    /**
     * Get min_quantity
     *
     * @return integer 
     */
    public function getMinQuantity()
    {
        return $this->min_quantity;
    }

    /**
     * Set price
     *
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set origin
     *
     * @param string $origin
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    /**
     * Get origin
     *
     * @return string 
     */
    public function getOrigin()
    {
        return $this->origin;
    }
	   /**
     * Set agor
     *
     * @param integer $agor
     */
    public function setAgor($agor)
    {
        $this->agor = $agor;
    }

    /**
     * Get agor
     *
     * @return integer 
     */
    public function getAgor()
    {
        return $this->agor;
    }
    /**
     * @ORM\OneToMany(targetEntity="buy", mappedBy="Sell")
     */
    protected $buy;

   
/**
     * @ORM\ManyToOne(targetEntity="Location", inversedBy="sell")
     * @ORM\JoinColumn(name="location_id", referencedColumnName="id")
     */
    protected $location;
/**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="sell")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * Add buy
     *
     * @param Acme\UserBundle\Entity\buy $buy
     */
    public function addbuy(\Acme\UserBundle\Entity\buy $buy)
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
     * Set location
     *
     * @param Acme\UserBundle\Entity\Location $location
     */
    public function setLocation(\Acme\UserBundle\Entity\Location $location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return Acme\UserBundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }

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
    public function __construct()
    {
        $this->buy = new \Doctrine\Common\Collections\ArrayCollection();
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
}
