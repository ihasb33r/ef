<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;
use Acme\UserBundle\Entity\Volunteer;

class VolunteerAddController extends Controller
{
    public function indexAction()
    {
        $volunteer= new Volunteer();
        $form =$this->createFormBuilder($volunteer)
            ->add('name', 'text')
            ->add('surname','text')
            ->add('age','number')
			->add('email','text')
            ->add('phone','number')
			->add('town','text')
            ->getForm();
        if ($this->getRequest()->getMethod()==="POST"){
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($volunteer);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('volunteer_new'));
        }
        return $this->render('AcmeUserBundle:Volunteer:volunteer_add.html.twig', array("form"=>$form->createView()));
    }



    public function newAction()
    {
        return $this->render('AcmeUserBundle:Volunteer:volunteer_new.html.twig');
    }
}
