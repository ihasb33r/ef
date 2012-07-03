<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;

class BusinessprosforesController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
         $business = $em->getRepository('AcmeUserBundle:Business')
            ->createQueryBuilder("p")
            ->where('p.approved=1')
            ->getQuery()
            ->getResult();

        return $this->render('AcmeUserBundle:Agrotis:prosforesepixeirhseis.html.twig',array('business'=>$business));
      
    }
}