<?php

namespace Acme\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\UserBundle\Entity\Rate
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Rate
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
     * @var integer $vath
     *
     * @ORM\Column(name="vath", type="integer")
     */
    private $vath;

    /**
     * @var string $sxolia
     *
     * @ORM\Column(name="sxolia", type="string", length=255)
     */
    private $sxolia;


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
     * Set vath
     *
     * @param integer $vath
     */
    public function setVath($vath)
    {
        $this->vath = $vath;
    }

    /**
     * Get vath
     *
     * @return integer 
     */
    public function getVath()
    {
        return $this->vath;
    }

    /**
     * Set sxolia
     *
     * @param string $sxolia
     */
    public function setSxolia($sxolia)
    {
        $this->sxolia = $sxolia;
    }

    /**
     * Get sxolia
     *
     * @return string 
     */
    public function getSxolia()
    {
        return $this->sxolia;
    }
		 /**
	     * @ORM\ManyToOne(targetEntity="User", inversedBy="rate")
	     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	     */
	    protected $user;


    /** @ORM\ManyToOne(targetEntity="User", inversedBy="vote")
     *  @ORM\JoinColumn(name="candidate_id", referencedColumnName="id")
     */
    protected $candidate;




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
     * Set candidate
     *
     * @param Acme\UserBundle\Entity\User $candidate
     */
    public function setCandidate(\Acme\UserBundle\Entity\User $candidate)
    {
        $this->candidate = $candidate;
    }

    /**
     * Get candidate
     *
     * @return Acme\UserBundle\Entity\User 
     */
    public function getCandidate()
    {
        return $this->candidate;
    }
}