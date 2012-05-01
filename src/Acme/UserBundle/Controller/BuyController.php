<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;
use Acme\UserBundle\Entity\Buy;
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
	$a=$buy->getQuantity();
	$b=$buy->getAgor();
	$upol[]=$a-$b;
    }
	return $this->render('AcmeUserBundle:Default:buy.html.twig', array ('sell'=>$sell, 'users'=>$users, 'upol'=>$upol));
    }
	public function newAction()
	{
	#get sell_id  and quantity kai upol
	$id=1;
	$upol=2;
	$quantity=2;
	$dia8=$upol-$quantity;
	if ($dia8>=0)
	{echo 'H agora pragmatopoihuhke epituxws';
	
	
	
	#sto pinaka agor na pros8esw thn agora
		
	$buy = new Buy();
	#de mporw na vrw tropo na apo8hkeuw ta foreign keys
    #$buy->setUser(getUser()->setId('1'));
    #$buy->setSell('1');
    $buy->setQuantity('2');
    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($buy);
    $em->flush();
	
	
	
    #update ton pinaka sell gia ta agorasmena
	$sell = $em->getRepository('AcmeUserBundle:Sell')->find($id);	
    $sell->setAgor($sell->getAgor()+$quantity);
    $em->flush();

	}
	return $this->render('AcmeUserBundle:Default:buy_new.html.twig', array('buy'=>$buy));
	
	
	}
	
	
	
	
	
 }

