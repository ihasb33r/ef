<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class AdminProductsController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $products = $em->getRepository('AcmeUserBundle:Product')->findAll();
        return $this->render('AcmeUserBundle:Admin:products.html.twig', array('products'=>$products));
    }
    public function uploadAction(Request $request)
    {
        $product = new Product();

        $form = $this->createFormBuilder($product)
            ->add('name', "text")
            ->add('file', "text")
            ->getForm()
            ;

        $myrequest = $this->getRequest();
        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bindRequest($myrequest);
            if ($form->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $product->upload();
                $em->persist($product);
                $em->flush();
                echo "mi gamiese<br/>";
            }
            else
            {
                echo "a gamisou<br/>";
            }
        }
        $em = $this->getDoctrine()->getEntityManager();
        $products = $em->getRepository('AcmeUserBundle:Product')->findAll();

        return $this->render('AcmeUserBundle:Admin:products.html.twig', array('products'=>$products));



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
