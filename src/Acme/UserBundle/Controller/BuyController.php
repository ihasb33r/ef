<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;

class BuyController extends Controller
{
    public function indexAction()
    {
	  $em = $this->getDoctrine()->getEntityManager();
 $sell = $em->getRepository('AcmeUserBundle:Sell')->findAll(); 
	foreach($sell as $buy){
		# prepei na pairnw me get to id to location
		if ($buy->getLocation()->getId()==2)
		{	
			$users = $em->getRepository('AcmeUserBundle:User')->findAll();
        }
	
    }
	return $this->render('AcmeUserBundle:Default:buy.html.twig', array ('sell'=>$sell, 'users'=>$users));
    }
	public function newAction()
	{
	
	
	
	
	
	}
	
	
	
	
	
 }

