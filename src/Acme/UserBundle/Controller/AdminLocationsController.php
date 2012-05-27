<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Security\Core\User\UserInterface;
//use Symfony\Component\DependencyInjection\ContainerAware;

class AdminLocationsController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $locations = $em->getRepository('AcmeUserBundle:Location')->findAll();
        return $this->render('AcmeUserBundle:Admin:locations.html.twig', array('locations'=>$locations));
    }
    public function newAction()
    {
        $location = new Location();
        $form = $this->createFormBuilder($location)
            ->add('name', "text")
            ->add('longitude', "number")
            ->add('latitude', "number")
            ->add('organiser', "text")
            ->add('extrainfo', "textarea")
            ->add('date', "date")
            ->add('address', "text")
            ->add('product', "entity", array('class'=>'AcmeUserBundle:Product', 'property'=>'name') )
            ->getForm()
            ;
        if ($this->getRequest()->get('ajax')=="true"){
            if ($this->getRequest()->getMethod() === 'POST') {
                $form->bindRequest($this->getRequest());
                if ($form->isValid()){
                    $em = $this->getDoctrine()->getEntityManager();
                    $em->persist($location);
                    $em->flush();
                }
            }
        }
        return $this->render('AcmeUserBundle:Admin:add_location.html.twig', array('form'=>$form->createView()));
    }
}
