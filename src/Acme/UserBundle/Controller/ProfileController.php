<?php

namespace Acme\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller ;
use FOS\UserBundle\Entity\UserManager;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\Security\Core\User\UserInterface;
use Acme\UserBundle\Entity\Sell;
use Acme\UserBundle\Entity\User;
class ProfileController extends Controller
{
 
    public function showAction()
    {
        $users = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($users) || !$users instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		 $id=$users->getId();
		 
		 $query = $this->getDoctrine()->getEntityManager()
        ->createQuery('SELECT s.id, l.address, s.price, s.origin, l.date, s.quantity, s.min_quantity FROM AcmeUserBundle:Sell s JOIN s.location l  WHERE s.id='.$id) ;
		
		 try {
        $l=$query->getResult();
		
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
	
		
      return $this->render('AcmeUserBundle:Default:poulimena.html.twig', array('l'=>$l));
    }

    
    public function editAction()
    {
      $id=$_GET['id'];
	   $query = $this->getDoctrine()->getEntityManager()
        ->createQuery('SELECT s.id, l.address, s.price, s.origin, l.date, s.quantity, s.min_quantity FROM AcmeUserBundle:Sell s JOIN s.location l  WHERE s.id='.$id) ;
		
		 try {
        $l=$query->getResult();
		
    } catch (\Doctrine\ORM\NoResultException $e) {
        return null;
    }
	
		
      return $this->render('AcmeUserBundle:Default:poulimena_edit.html.twig', array('l'=>$l));

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