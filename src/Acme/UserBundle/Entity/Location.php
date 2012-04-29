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
     * @var date $date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

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

   
}