<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;

class ProsforesController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
         $locat = $em->getRepository('AcmeUserBundle:Location')
            ->createQueryBuilder("p")
            ->where('p.date > :date and p.approved=1')
            ->setParameter('date',new \DateTime("today"))
            ->orderby('p.date', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->render('AcmeUserBundle:Agrotis:prosforesagrotwn.html.twig',array('locations'=>$locat));
      
    }
}
