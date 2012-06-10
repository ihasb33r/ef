<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Sellbusiness
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Sellbusiness
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
     * @var float $quantity
     *
     * @ORM\Column(name="quantity", type="float")
     */
    private $quantity;

    /**
     * @var integer $price
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var string $origin
     *
     * @ORM\Column(name="origin", type="string", length=255)
     */
    private $origin;


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
     * Set quantity
     *
     * @param float $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Get quantity
     *
     * @return float 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param integer $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get price
     *
     * @return integer 
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="sellbusiness")
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
     * @ORM\ManyToOne(targetEntity="Business", inversedBy="sellbusiness")
     * @ORM\JoinColumn(name="business_id", referencedColumnName="id")
     */
    protected $business;

    /**
     * Set business
     *
     * @param Acme\UserBundle\Entity\Business $business
     */
    public function setBusiness(\Acme\UserBundle\Entity\Business $business)
    {
        $this->business = $business;
    }

    /**
     * Get business
     *
     * @return Acme\UserBundle\Entity\Business 
     */
    public function getBusiness()
    {
        return $this->business;
    }
}