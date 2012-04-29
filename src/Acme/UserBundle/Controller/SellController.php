<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Sell;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class SellController extends Controller
{
   public function indexAction(Request $request)
{
#ayta prepei na mpoun hidden!!!
			#->add('location_id', 'integer')
            #->add('user_id', 'integer')
        $sell= new Sell();
		$form = $this->createFormBuilder($sell)
			->add('quantity', 'integer')
            ->add('min_quantity', 'integer')
            ->add('price')
			->add('origin')
            ->getForm();
	
				if ($request->getMethod() == 'POST') 
				{  
				$form->bindRequest($request);
					$em = $this->getDoctrine()->getEntityManager();
					$em->persist($sell);
					$em->flush();
					echo'ola phgan kala!';
				}
        return $this->render('AcmeUserBundle:Default:sell.html.twig', array(
            'form' => $form->createView(), ));
}


}