<?php

namespace Acme\UserBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Product
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Product
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;



    /**
     * @var string $image
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;


    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;



    public function upload()
    {
/*
        if( null === $this->file){
            return;
        }
 */
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

        // set the path property to the filename where you'ved saved the file
        $this->image = $this->getUploadDir().$this->file->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;

    }

    public function getAbsolutePath()
    {
        return null === $this->image ? null : $this->getUploadRoodDir().'/'.$this->image;
    }

    public function getWebPath()
    {
        return null === $this->image? null : $this->getUploadDir().'/'.$this->image;

    }


    public function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function getUploadDir()
    {
        return 'img/products/';
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
     * Set image
     *
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * @ORM\OneToMany(targetEntity="Location", mappedBy="product")
     */
    protected $location;

    public function __construct()
    {
        $this->location = new \Doctrine\Common\Collections\ArrayCollection();
    }

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



    public function __toString(){

        return $this->name;

    }



}
