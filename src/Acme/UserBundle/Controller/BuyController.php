<?php

namespace Acme\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;
use Acme\UserBundle\Entity\Sell;
use Acme\UserBundle\Entity\Buy;
use Acme\UserBundle\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class BuyController extends Controller
{
    public function indexAction($id)
    { 

        $buy= new Buy();
        $form =$this->createFormBuilder($buy)
            ->add('quantity', 'number')
            ->getForm();
        $em = $this->getDoctrine()->getEntityManager();
        $current_location = $em->getRepository("AcmeUserBundle:Location")->find($id);
        $sell = $em->getRepository('AcmeUserBundle:Sell')->findBy(array("location"=>$id));
        return $this->render('AcmeUserBundle:Default:buy.html.twig', array("location_id"=>$id,"form"=>$form->createView(), "sell"=>$sell, "id"=>$id));
    }


    public function newAction( $location_id, $offer_id)
    {
        $buy= new Buy();
        $form =$this->createFormBuilder($buy)
            ->add('quantity', 'number')
            ->getForm();

        if ($this->getRequest()->getMethod()==="POST"){

            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                $user = $this->container->get('security.context')->getToken()->getUser();
                if (!is_object($user) || !$user instanceof UserInterface) {
                    throw new AccessDeniedException('This user does not have access to this section.');
                }
                $em = $this->getDoctrine()->getEntityManager();
                $quantity=$buy->getQuantity();
                $buy->setUser($user);
                $sell = $em->getRepository('AcmeUserBundle:Sell')->find($offer_id);
                $sell->setAgor($sell->getAgor()+$quantity);
                $buy->setSell($sell);
                $em->persist($buy);
                $em->flush();
            }
            return $this->render('AcmeUserBundle:User:buy_new.html.twig'); 	   
        }
        return $this->redirect($this->generateUrl('buy'));



    }





}

