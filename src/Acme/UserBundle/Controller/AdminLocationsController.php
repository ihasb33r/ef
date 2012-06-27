<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class AdminLocationsController extends Controller
{
    public function indexAction()
    {
        $this->getRequest()->getSession()->set('referrer', $this->getRequest()->getRequestUri());
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Location')->createQueryBuilder("p");
        $locat =  $qb
            ->orderby('p.date', 'DESC')
            ->getQuery()
            ->getResult();
        $template_vars=array(
            'items'=>$locat,
            'edit_path'=>'admin_locations_edit',
            'delete_path'=>'admin_locations_delete',
            'new_path'=>'admin_locations_new',
            'approve_path'=>'admin_approve'
        );
        return $this->render('AcmeUserBundle:Admin:locations.html.twig',$template_vars);


    }
    public function newAction()
    {
        return $this->redirect($this->generateUrl('admin_locations_edit',array("id"=>-1) ));
    }

    public function editAction($id)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            return $this->redirect($this->generateUrl('main'));
        }
        if ($id == -1){
        $location = new Location();
        }
        else {
        $em = $this->getDoctrine()->getEntityManager();
        $location = $em->getRepository('AcmeUserBundle:Location')->find($id);
        }
        $formbuilder = $this->createFormBuilder($location)
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
            ->add('public', "checkbox")
            ->add('product', "entity", array('class'=>'AcmeUserBundle:Product', 'property'=>'name') );
            
        if ($this->get('security.context')->isGranted('ROLE_ADMIN')){
            $formbuilder->add('approved', "checkbox");
        }

        $form = $formbuilder->getForm();
        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                $em->persist($location);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('admin_locations'));
        }
        $template_vars=array(
            'form'=>$form->createView(),
            'id'=>$id,
            'action'=>'admin_locations_edit',
            'back'=>'admin_locations',
        );
        return $this->render('AcmeUserBundle:Admin:add_location.html.twig',$template_vars);

    }

    public function deleteAction($id){

        $em = $this->getDoctrine()->getEntityManager();
        $location = $em->getRepository('AcmeUserBundle:Location')->findOneById($id);
        $em->remove($location);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_locations'));

    }

}
