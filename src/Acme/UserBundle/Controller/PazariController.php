<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;

class PazariController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
         $locat = $em->getRepository('AcmeUserBundle:Location')
            ->createQueryBuilder("p")
            ->where('p.date > :date')
            ->setParameter('date',new \DateTime("today"))
            ->orderby('p.date', 'ASC')
            ->getQuery()
            ->getResult();
 $category=$_GET['category'];
        return $this->render('AcmeUserBundle:Default:pazari2.html.twig',array('locations'=>$locat, 'category'=>$category));
      
    }
public function newAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
         $locat = $em->getRepository('AcmeUserBundle:Location')
            ->createQueryBuilder("p")
            ->where('p.date > :date')
            ->setParameter('date',new \DateTime("today"))
            ->orderby('p.date', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->render('AcmeUserBundle:Default:pazari.html.twig',array('locations'=>$locat));
      
    }
}
