<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Volunteer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Volunteer
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
     * @var string $surname
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var integer $age
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;
	/**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var integer $phone
     *
     * @ORM\Column(name="phone", type="integer")
     */

    private $phone;

    /**
     * @var string $town
     *
     * @ORM\Column(name="town", type="string", length=255)
     */
    private $town;


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
     * Set age
     *
     * @param integer $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
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
     * Set surname
     *
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}