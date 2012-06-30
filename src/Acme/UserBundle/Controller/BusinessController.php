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
    public function indexAction()
    {
        $this->getRequest()->getSession()->set('referrer', $this->getRequest()->getRequestUri());
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Business')->createQueryBuilder("p");
        $locat =  $qb
            ->getQuery()
            ->getResult();
        $template_vars=array(
            'items'=>$locat,
            'edit_path'=>'business_edit',
            'delete_path'=>'business_delete',
            'new_path'=>'business_new'
        );
        return $this->render('AcmeUserBundle:Business:business.html.twig',$template_vars);
    }
    public function newAction()
    {
        return $this->redirect($this->generateUrl('business_edit',array("id"=>-1) ));
    }

    public function editAction($id)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            return $this->redirect($this->generateUrl('main'));
        }
        $em = $this->getDoctrine()->getEntityManager();
        if ($id == -1){
            $business = new Business();
        }
        else {
            $business = $em->getRepository('AcmeUserBundle:Business')->find($id);
        }
        $formbuilder = $this->createFormBuilder($business)

            ->add('business_name', "text")
            ->add('address', "text")
            ->add('town', "text")
            ->add('postal', "number")
			->add('phone', "number")
			->add('amount', "number")
            ->add('extra', "textarea")
            ->add('product', "entity", array('class'=>'AcmeUserBundle:Product', 'property'=>'name') )
          
            ;
        
        $form = $formbuilder->getForm();
        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                if ($id==-1){
                    $business->setPublic(false);
                }
                $em->persist($business);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('business'));
        }
        $template_vars=array(
            'form'=>$form->createView(),
            'id'=>$id,
            'action'=>'business_edit',
            'back'=>'business',
        );
        return $this->render('AcmeUserBundle:Business:add_business.html.twig',$template_vars);
    }
    public function deleteAction($id){
        $em = $this->getDoctrine()->getEntityManager();
        $business = $em->getRepository('AcmeUserBundle:Business')->findOneById($id);
        $em->remove($business);
        $em->flush();
        return $this->redirect($this->generateUrl('business_view'));
    }
}