<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Sell;
use Acme\UserBundle\Entity\User;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class SellNewController extends Controller
{
   public function indexAction(Request $request)
{

			
				if ($request->getMethod() == 'POST') 
				{   $form->bindRequest($request);
					$em = $this->getDoctrine()->getEntityManager();
					$em->persist($sell);
					$em->flush();
					echo'ola phgan kala!';
				}
        return $this->render('AcmeUserBundle:Default:sell_new.html.twig', array(
            'form' => $form->createView() ));

				
}}
