<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Buy
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Buy
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
/**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="buy")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
/**
     * @ORM\ManyToOne(targetEntity="Sell", inversedBy="buy")
     * @ORM\JoinColumn(name="sell_id", referencedColumnName="id")
     */
    protected $sell;

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
     * Set sell
     *
     * @param Acme\UserBundle\Entity\Sell $sell
     */
    public function setSell(\Acme\UserBundle\Entity\Sell $sell)
    {
        $this->sell = $sell;
    }

    /**
     * Get sell
     *
     * @return Acme\UserBundle\Entity\Sell 
     */
    public function getSell()
    {
        return $this->sell;
    }
}