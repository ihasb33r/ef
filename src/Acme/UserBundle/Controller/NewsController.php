<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;

class NewsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
         $news = $em->getRepository('AcmeUserBundle:NewsEntry')
            ->createQueryBuilder("n")
            ->orderby('n.id', 'DESC')
            ->getQuery()
            ->getResult();
        return $this->render('AcmeUserBundle:Default:news.html.twig',array('news'=>$news));
      
    }
public function newAction()
    {
      
    }
}
