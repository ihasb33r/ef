<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;

class PazariController extends Controller
{
    public function indexAction()
    {
	  $em = $this->getDoctrine()->getEntityManager();
 $location = $em->getRepository('AcmeUserBundle:Location')->findAll();

foreach($location as $loc)
{ echo $loc->getAddress();
$m=$loc->getProduct()->getId();
echo '-' . $loc->getAddress().'-'. $loc->getLongitude() .','. $loc->getLatitude() .','. $loc->getDate()->format('Y-m-d H:i:s') ; ?><br><?php
		$location = $em->getRepository('AcmeUserBundle:Location')->findAll();
		
 $query = $em
        ->createQuery('
            SELECT p FROM AcmeUserBundle:Product p
            
            WHERE p.id = '.$m)->getResult();	

foreach ($query as $prod)
{
echo $prod->getName();
}


	
		#olo auto upologizei thn prohgoumenh mera
$today = getdate();
$day=$today['mday'];
$month=$today['mon'];
$d=$today['mday']-1;
$m=$today['mon'];
if($day=='1' and ($month=='4' or $month=='6' or $month=='9' or $month=='11'))
{$d=30;
}
if($day=='1' and ($month=='1' or $month=='1' or $month=='5' or $month=='7' or  $month=='8' or $month=='10' or $month=='12'))
{$d=31;
}
if($day=='1' and $month=='2')
{$d=28;
#den exw valei gia to 29!!!

		if($loc->getDate()->format('m')>=$m) 
		{echo 'prepei na mhn emfanizontai';}
	}
?><br><?php	
}	
		
		
		


#prepei na ftiaksoume kati pou na diagrafei tis prohgoumenes sunanthseis 
	return $this->render('AcmeUserBundle:Default:pazari.html.twig');
   
}
}