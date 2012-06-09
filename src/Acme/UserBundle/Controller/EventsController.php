<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;

class EventsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
         $events = $em->getRepository('AcmeUserBundle:Events')
            ->createQueryBuilder("n")
            ->orderby('n.id', 'DESC')
            ->getQuery()
            ->getResult();
        return $this->render('AcmeUserBundle:Default:events.html.twig',array('events'=>$events));
      
    }
public function newAction()
    {
      
    }
}
