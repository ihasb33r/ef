<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Sellbusiness;
use Acme\UserBundle\Entity\User;
use Acme\UserBundle\Entity\Business;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class SellbusinessController extends Controller
{
    public function indexAction($id)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $sellbusiness= new Sellbusiness();
        $form =$this->createFormBuilder($sellbusiness)
            ->add('quantity', 'number')
            ->add('price','number')
            ->add('origin','text')
            ->getForm();
        if ($this->getRequest()->getMethod()==="POST"){
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $sellbusiness->setUser($user);
                $business = $em->getRepository('AcmeUserBundle:Business')->findOneById($id);
                $sellbusiness->setBusiness($business);
                $em->persist($sellbusiness);
                $em->flush();
            }
			return $this->redirect($this->generateUrl('sellbusiness_new'));
        }
        return $this->render('AcmeUserBundle:Agrotis:sellbusiness.html.twig', array("sellbusiness_id"=>$id, "form"=>$form->createView()));
    }



    public function newAction()
    {
 return $this->render('AcmeUserBundle:Agrotis:sellbusiness_new.html.twig');
    }
}
