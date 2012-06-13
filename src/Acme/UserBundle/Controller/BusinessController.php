<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Business;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class BusinessController extends Controller
{
    public function indexAction(Request $request)
   {
        $location = new Business();
        $form = $this->createFormBuilder($location)
            ->add('business_name', "text")
            ->add('address', "text")
            ->add('town', "text")
            ->add('postal', "number")
			->add('phone', "number")
			->add('amount', "number")
            ->add('extra', "textarea")
            ->add('product', "entity", array('class'=>'AcmeUserBundle:Product', 'property'=>'name') )
            ->getForm()
            ;
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $location->setUser($user);
                $location->setApproved(false);
                $em->persist($location);
                $em->flush();
            }return $this->redirect($this->generateUrl('business_add')); 
        }
        return $this->render('AcmeUserBundle:Business:business.html.twig', array('form'=>$form->createView()));
    }
    public function addAction()
    {
        
        return $this->render('AcmeUserBundle:Business:add_business.html.twig');
    }
}
