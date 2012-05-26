<?php

namespace Acme\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller ;
use FOS\UserBundle\Entity\UserManager;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\User\UserInterface;
use Acme\UserBundle\Entity\Sell;
use Acme\UserBundle\Entity\User;
class KalathiController extends Controller
{
 
    public function showAction()
    {
        $users = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($users) || !$users instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		 $id=$users->getId();
		 $em = $this->getDoctrine()->getEntityManager();
		 $buy = $em->getRepository('AcmeUserBundle:Buy')->findAll();

				 return $this->render('AcmeUserBundle:Default:agorasmena.html.twig', array('id'=>$id, 'buy'=>$buy ));
			}	
     

         public function deleteAction($id){
        $em = $this->getDoctrine()->getEntityManager();
        $buys = $em->getRepository('AcmeUserBundle:Buy')->findOneById($id);
        $em->remove($buys);
        $em->flush();

        return $this->showAction();

    }
	
	public function editnewAction()
    {
	
 $id=$_POST['id'];	
	 $em = $this->getDoctrine()->getEntityManager();
    $sell = $em->getRepository('AcmeUserBundle:Sell')->find($id);

    if (!$sell) {
        throw $this->createNotFoundException('No product found for id '.$id);
    }
  
	$sell->setQuantity($_POST['quantity']);
	$sell->setMinquantity($_POST['min_quantity']);
	$sell->setPrice($_POST['price']);
	$sell->setOrigin($_POST['origin']);
    $em->flush();
 
 
 return $this->render('AcmeUserBundle:Default:poulimena_edit_new.html.twig');
	
	}
	
	
	
}