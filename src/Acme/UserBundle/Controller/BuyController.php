<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;
use Acme\UserBundle\Entity\Sell;
use Acme\UserBundle\Entity\Buy;
use Acme\UserBundle\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class BuyController extends Controller
{
    public function indexAction()
    { $loc[]=$_POST['id'];
		$em = $this->getDoctrine()->getEntityManager();
		$sell = $em->getRepository('AcmeUserBundle:Sell')->findAll(); 
		$users = $em->getRepository('AcmeUserBundle:User')->findAll();
		$loca=$em->getRepository('AcmeUserBundle:Location')->findAll();
	return $this->render('AcmeUserBundle:Default:buy.html.twig', array ('sell'=>$sell, 'users'=>$users, 'loc'=>$loc, 'loca'=>$loca));
    }
	
	
	public function newAction()
	{
	#get sell_id  and quantity kai upol
 $id=$_POST['id'];
$quantity=$_POST['quant'];
	 $em = $this->getDoctrine()->getEntityManager();
    $se = $em->getRepository('AcmeUserBundle:Sell')->findAll();
foreach ($se as $sell) {
if($sell->getId()==$id)
	{$a=$sell->getAgor();
	 $q=$sell->getQuantity();}}
	$upol=$q-$a;
	$dia8=$upol-$quantity;
	if ($dia8>=0)
	{
	
	
	$user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		$id=$user->getId();
	#sto pinaka agor na pros8esw thn agora
	$buy = new Buy();
	$user= new User();

	#de mporw na vrw tropo na apo8hkeuw ta foreign keys
  
    #$buy->getSell()->addId();
    $buy->setQuantity($quantity);
	//$buy->setUser($user);
    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($buy);
    $em->flush();
	
	
	
    #update ton pinaka sell gia ta agorasmena
	$sell = $em->getRepository('AcmeUserBundle:Sell')->find($id);	
    $sell->setAgor($sell->getAgor()+$quantity);
	$b = $em->getRepository('AcmeUserBundle:Buy')->findById($id);
	foreach ($b as $ba)
	{$kod[]= $ba->getId();}
    $em->flush();

	}
	return $this->render('AcmeUserBundle:Default:buy_new.html.twig', array('kod'=>$kod));
	
	
	}
	
	
	
	
	
 }

