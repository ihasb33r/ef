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
        /*
        $id=$_POST['id'];	
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $idi=$user->getId();
        $em = $this->getDoctrine()->getEntityManager();
        $location = $em->getRepository('AcmeUserBundle:Location')->find($id);

        $sell= new Sell();
        $sell->setQuantity($_POST['quantity']);
        $sell->setMinquantity($_POST['min_quantity']);
        $sell->setPrice($_POST['price']);
        $sell->setOrigin($_POST['origin']);
        $sell->setAgor($_POST['agor']);
        $sell->setUser($user);
        $sell->setLocation($location);
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($location);
        $em->persist($sell);
        $em->persist($user);
        $em->flush();
        return $this->render('AcmeUserBundle:Default:sell_new.html.twig');
         */
    }



}
