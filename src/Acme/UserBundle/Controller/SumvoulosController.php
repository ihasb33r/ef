<?php

namespace Acme\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;

class SumvoulosController extends Controller
{
 
    public function indexAction()
    {
      $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Product')->createQueryBuilder("p");
        $locat =  $qb
		    ->where("p.sumvoulos<>'0'")
            ->getQuery()
            ->getResult();
        return $this->render('AcmeUserBundle:User:sumvoulos.html.twig',array('events'=>$locat));
			 
      
    }

  }