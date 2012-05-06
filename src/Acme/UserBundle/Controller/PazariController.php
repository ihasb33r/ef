<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;

class PazariController extends Controller
{
    public function indexAction()
    {
	  $em = $this->getDoctrine()->getEntityManager();
 $locat = $em->getRepository('AcmeUserBundle:Location')->findAll();

	$query = $em->getRepository('AcmeUserBundle:Product')->findAll();


return $this->render('AcmeUserBundle:Default:pazari.html.twig',array('locat'=>$locat,'query'=>$query));		  
}}