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
     * @var string $sxolia
     *
     * @ORM\Column(name="sxolia", type="string", length=255)
     */
    private $message;
    
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $sender;


}
