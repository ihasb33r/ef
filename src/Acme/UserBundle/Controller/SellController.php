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
    public function indexAction($id)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $sell= new Sell();
        $form =$this->createFormBuilder($sell)
            ->add('quantity', 'number')
            ->add('min_quantity','number')
            ->add('price','number')
            ->add('origin','text')
            ->getForm();
        if ($this->getRequest()->getMethod()==="POST"){
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $sell->setUser($user);
                $location = $em->getRepository('AcmeUserBundle:Location')->find($id);
                $sell->setLocation($location)  ;
                $sell->setAgor(0)  ;
                $em->persist($sell);
                $em->flush();
            }
			return $this->redirect($this->generateUrl('sell_new'));
        }
        return $this->render('AcmeUserBundle:Default:sell.html.twig', array("location_id"=>$id,"form"=>$form->createView()));
    }



    public function newAction()
    {
 return $this->render('AcmeUserBundle:Default:sell_new.html.twig');
    }
}
