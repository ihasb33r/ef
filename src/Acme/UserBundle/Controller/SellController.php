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
class SellController extends Controller
{
   public function indexAction(Request $request)
{
     $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		 $id=$user->getId();

        $sell= new Sell();
		$form = $this->createFormBuilder($sell)
			->add('quantity', 'text')
            ->add('min_quantity', 'text')
            ->add('price', 'text')
            ->add('origin', 'text')
			->add('agor', 'integer')
            ->getForm();
			
				if ($request->getMethod() == 'POST') 
				{   $form->bindRequest($request);
					$em = $this->getDoctrine()->getEntityManager();
					$em->persist($sell);
					$em->flush();
					echo'ola phgan kala!';
				}
				
        return $this->render('AcmeUserBundle:Default:sell.html.twig', array(
            'form' => $form->createView() ));

				
}
 public function newAction()
 {echo 'ola kl';
 return $this->render('AcmeUserBundle:Default:sell_new.html.twig');
 }



}
