<?php

namespace Acme\UserBundle\Controller;
use Acme\UserBundle\Entity\Agrotis;
use Acme\UserBundle\Entity\Rating;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;

class VoteController extends Controller
{

    public function showvotes($canditate){

        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $location = $em->getRepository('AcmeUserBundle:Rate')->findOneByUser($id);




    }


    public function voteAction($canditate, $vote )
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $location = $em->getRepository('AcmeUserBundle:Rate')->findOneByUser($id);

    }

  }
