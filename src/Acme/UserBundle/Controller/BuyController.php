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

	 $em = $this->getDoctrine()->getEntityManager();
		 $sell = $em->getRepository('AcmeUserBundle:Sell')->findAll();

    return $this->render('AcmeUserBundle:Default:buy.html.twig', array ('sell'=>$sell, 'id'=>$id));
    }


    public function newAction()
    {
        echo 'aaaaaaaaa';
        $id=$_POST['id'];
        $quantity=$_POST['quant'];
        $em = $this->getDoctrine()->getEntityManager();
        $se = $em->getRepository('AcmeUserBundle:Sell')->findAll();
        foreach ($se as $sell) {
            if($sell->getId()==$id)
            {$a=$sell->getAgor();
            $q=$sell->getQuantity();}}
            $upol=$q-$a;
            $dia8=$upol-$quantity;
            if ($dia8>=0)
            {


                $user = $this->container->get('security.context')->getToken()->getUser();
                if (!is_object($user) || !$user instanceof UserInterface) {
                    throw new AccessDeniedException('This user does not have access to this section.');
                }
                $idi=$user->getId();

                $sell = $em->getRepository('AcmeUserBundle:Sell')->find($id);	
                $sell->setAgor($sell->getAgor()+$quantity);
                $buy= new Buy();
                $buy->setQuantity($_POST['quant']);
                $buy->setUser($user);
                $buy->setSell($sell);
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($buy);
                $em->persist($sell);
                $em->persist($user);
                $em->flush();

                $kod[]=$buy->getId();}
               // return $this->render('AcmeUserBundle:Default:buy_new.html.twig', array('kod'=>$kod));


    }





}

