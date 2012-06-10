<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Newsvolunteer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class AdminVolunteerController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Newsvolunteer')->createQueryBuilder("p");
        $locat =  $qb
            ->orderby('p.id', 'DESC')
            ->getQuery()
            ->getResult();
        return $this->render('AcmeUserBundle:Admin:volunteer.html.twig',array('news'=>$locat));
    }
	   public function echoAction()
    {
	 $em = $this->getDoctrine()->getEntityManager();
		 $qb = $em->getRepository('AcmeUserBundle:Volunteer')->findAll();
        
        return $this->render('AcmeUserBundle:Admin:echo_volunteer.html.twig',array('news'=>$qb));
    }
    public function newAction()
    {
        $item = new Newsvolunteer();
        $form = $this->createFormBuilder($item)
            ->add('title', "text")
            ->add('content', "textarea")
            ->getForm()
            ;
        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($item);
                $em->flush();
            }return $this->redirect($this->generateUrl('admin_volunteer'));
        }
        return $this->render('AcmeUserBundle:Admin:volunteer_new.html.twig', array('form'=>$form->createView()));
    }

    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $item = $em->getRepository('AcmeUserBundle:Newsvolunteer')->find($id);
        $form = $this->createFormBuilder($item)
            ->add('title', "text")
            ->add('content', "textarea")
            ->getForm()
            ;
        //        $form->setData($locationdata);
        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                $em->persist($item);
                $em->flush();
            }return $this->redirect($this->generateUrl('admin_volunteer'));
        }
        return $this->render('AcmeUserBundle:Admin:volunteer_edit.html.twig', array('form'=>$form->createView(), 'id'=>$id));
    }

    public function deleteAction($id){

        $em = $this->getDoctrine()->getEntityManager();
        $item = $em->getRepository('AcmeUserBundle:Newsvolunteer')->findOneById($id);
        $em->remove($item);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_volunteer'));

    }
	  public function echodeleteAction($id){

        $em = $this->getDoctrine()->getEntityManager();
        $item = $em->getRepository('AcmeUserBundle:Volunteer')->findOneById($id);
        $em->remove($item);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_volunteer_echo'));

    }

}
