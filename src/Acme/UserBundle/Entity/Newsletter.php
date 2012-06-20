<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Newsletter
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Newsletter
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
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $isSubscribed
     *
     * @ORM\Column(name="isSubscribed", type="string", length=255)
     */
    private $isSubscribed;


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

    /**
     * Set isSubscribed
     *
     * @param string $isSubscribed
     */
    public function setIsSubscribed($isSubscribed)
    {
        $this->isSubscribed = $isSubscribed;
    }

    /**
     * Get isSubscribed
     *
     * @return string 
     */
    public function getIsSubscribed()
    {
        return $this->isSubscribed;
    }

    public function _toString()
    {
        return $this->getEmail();
    }
}
