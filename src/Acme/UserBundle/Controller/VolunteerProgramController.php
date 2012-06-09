<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;

class VolunteerProgramController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
         $news = $em->getRepository('AcmeUserBundle:Newsvolunteer')
            ->createQueryBuilder("n")
            ->orderby('n.id', 'DESC')
            ->getQuery()
            ->getResult();
        return $this->render('AcmeUserBundle:Volunteer:volunteer_program.html.twig',array('news'=>$news));
      
    }

}