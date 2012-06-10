<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Business;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class AdminBusinessController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Business')->createQueryBuilder("p");
        $locat =  $qb
            ->orderby('p.date', 'DESC')
            ->getQuery()
            ->getResult();
        return $this->render('AcmeUserBundle:Admin:business.html.twig',array('locations'=>$locat));

    }
    public function newAction()
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
        if ($this->getRequest()->get('ajax')=="true"){ 
            if ($this->getRequest()->getMethod() === 'POST') {
                $form->bindRequest($this->getRequest());
                if ($form->isValid()){
                    $em = $this->getDoctrine()->getEntityManager();
					$business->setUser($user);
					$business->setApproved(false);
                    $em->persist($business);
                    $em->flush();
                }return $this->redirect($this->generateUrl('admin_business_add')); 
            }
        }
        return $this->render('AcmeUserBundle:Admin:add_business.html.twig', array('form'=>$form->createView()));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $location = $em->getRepository('AcmeUserBundle:Business')->find($id);
        $form = $this->createFormBuilder($location)
            ->add('name', "text")
            ->add('longitude', "number")
            ->add('latitude', "number")
            ->add('organiser', "text")
            ->add('extrainfo', "textarea")
            ->add('date', "date")
            ->add('address', "text")
            ->add('phone', "text")
            ->add('starttime', "time")
            ->add('endtime', "time")
            ->add('product', "entity", array('class'=>'AcmeUserBundle:Product', 'property'=>'name') )
            ->getForm()
            ;
        //        $form->setData($locationdata);
        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                #                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($location);
                $em->flush();
                return $this->redirect($this->generateUrl('admin_locations'));
            }
        }
        return $this->render('AcmeUserBundle:Admin:edit_location.html.twig', array('form'=>$form->createView(), 'id'=>$id));

    }

    public function deleteAction($id){

        $em = $this->getDoctrine()->getEntityManager();
        $location = $em->getRepository('AcmeUserBundle:Location')->findOneById($id);
        $em->remove($location);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_locations'));

    }

}
