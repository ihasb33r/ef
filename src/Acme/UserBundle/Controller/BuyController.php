<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;

class BuyController extends Controller
{
    public function indexAction()
    {

$em = $this->getDoctrine()->getEntityManager();
 $dql = $em->createQuery('SELECT s FROM AcmeUserBundle:Sell s WHERE s.active=1');
     $agora = $dql->getResult();


	return $this->render('AcmeUserBundle:Default:buy.html.twig', array ('agora'=>$agora));


	
}
   }

