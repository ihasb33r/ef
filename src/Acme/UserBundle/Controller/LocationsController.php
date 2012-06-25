<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class LocationsController extends Controller
{
    public function indexAction(Request $request)
    {$user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		$id=$user->getId();
        $em = $this->getDoctrine()->getEntityManager();
        $locat= $em->createQuery(
                   'SELECT l, u FROM AcmeUserBundle:Location l JOIN l.user u
            WHERE l.id = :id')->setParameter('id', $id);
        $locations = $locat->getResult();
 return $this->render('AcmeUserBundle:Organiser:locations.html.twig', array('locations'=>$locations));

    }
    public function newAction()
    {
        $location = new Location();
        $form = $this->createFormBuilder($location)
            ->add('name', "text")
            ->add('longitude', "hidden")
            ->add('latitude', "hidden")
            ->add('organiser', "text")
            ->add('extrainfo', "textarea")
            ->add('date', "date")
            ->add('address', "text")
            ->add('town', "text")
            ->add('postalcode', "text")
            ->add('phone', "text")
            ->add('starttime', "time")
            ->add('endtime', "time")
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
                $location->setApproved(false);
                $location->setPublic(false);
                $location->setUser($user);
                $em->persist($location);
                $em->flush();
            }return $this->redirect($this->generateUrl('admin_locations'));
        }
        return $this->render('AcmeUserBundle:Organiser:add_location.html.twig', array('form'=>$form->createView()));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $location = $em->getRepository('AcmeUserBundle:Location')->find($id);
        $form = $this->createFormBuilder($location)
            ->add('name', "text")
            ->add('longitude', "number")
            ->add('latitude', "number")
            ->add('organiser', "text")
            ->add('extrainfo', "textarea")
            ->add('date', "date")
            ->add('address', "text")
            ->add('town', "text")
            ->add('postalcode', "text")
            ->add('phone', "text")
            ->add('starttime', "time")
            ->add('endtime', "time")
            ->add('approved', "checkbox")
            ->add('public', "checkbox")
            ->add('product', "entity", array('class'=>'AcmeUserBundle:Product', 'property'=>'name') )
            ->getForm()
            ;
        // $form->setData($locationdata);
        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                # $em = $this->getDoctrine()->getEntityManager();
                $em->persist($location);
                $em->flush();
            }return $this->redirect($this->generateUrl('locations'));
        }
        return $this->render('AcmeUserBundle:Organiser:edit_location.html.twig', array('form'=>$form->createView(), 'id'=>$id));

    }

    public function deleteAction($id){

        $em = $this->getDoctrine()->getEntityManager();
        $location = $em->getRepository('AcmeUserBundle:Location')->findOneById($id);
        $em->remove($location);
        $em->flush();
        return $this->redirect($this->generateUrl('locations'));

    }

}
