<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LocationsController extends Controller
{
    public function indexAction(Request $request)
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
			->add('phone', "number")
			->add('starttime', "time")
			->add('endtime', "time")
            ->add('product', "entity", array('class'=>'AcmeUserBundle:Product', 'property'=>'name') )
            ->getForm()
            ;
        if ($this->getRequest()->get('ajax')=="true"){ 
            if ($this->getRequest()->getMethod() === 'POST') {
                $form->bindRequest($this->getRequest());
                if ($form->isValid()){
                    $em = $this->getDoctrine()->getEntityManager();
					$location->setApproved(false);
					$location->setPublic(true);
                    $em->persist($location);
                    $em->flush();
                }return $this->redirect($this->generateUrl('locations_new'));
            }
        }
        return $this->render('AcmeUserBundle:Default:locations.html.twig', array('form'=>$form->createView()));
    }
    public function newAction()
    {
        
        return $this->render('AcmeUserBundle:Default:add_location.html.twig');
    }
}
