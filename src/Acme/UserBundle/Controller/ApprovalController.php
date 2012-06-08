<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class ApprovalController extends Controller
{
    public function indexAction(Request $request)
    {
         
			$user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		$id=$user->getId();
        $em = $this->getDoctrine()->getEntityManager();
		$location = $em->getRepository("AcmeUserBundle:Location")->findAll();
		$sell = $em->getRepository("AcmeUserBundle:Sell")->findAll();
        return $this->render('AcmeUserBundle:Organiser:approval.html.twig', array('location'=>$location,'sell'=>$sell, 'id'=>$id));
    }
    public function okAction($id)
    { 
	     $em = $this->getDoctrine()->getEntityManager();
		 $sell = $em->getRepository('AcmeUserBundle:Sell')->findById($id);
		 $sell->setApproved(true);
		 $em->flush();
		
      return $this->indexAction();
    }
	 public function noAction($id)
    {
        
        $em = $this->getDoctrine()->getEntityManager();
        $sell= $em->getRepository('AcmeUserBundle:Sell')->findOneById($id);
        $em->remove($sell);
        $em->flush();

        return $this->indexAction();
    }
}
