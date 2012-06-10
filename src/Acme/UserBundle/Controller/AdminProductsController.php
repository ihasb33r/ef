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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $products = $em->getRepository('AcmeUserBundle:Product')->findAll();
        return $this->render('AcmeUserBundle:Admin:products.html.twig', array('products'=>$products));
    }
    public function deleteAction($id){

        $em = $this->getDoctrine()->getEntityManager();
        $products = $em->getRepository('AcmeUserBundle:Product')->findOneById($id);
        $em->remove($products);
        $em->flush();
        return $this->indexAction();


    }


    public function editAction($id){

        $em = $this->getDoctrine()->getEntityManager();
        $products = $em->getRepository('AcmeUserBundle:Product')->findOneById($id);
        $form = $this->createFormBuilder($product)
            ->add('name', "text")
            ->add('category',"text")
            ->add('file', "file")
            ->getForm()
            ;
        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $product->upload();
                $em->persist($product);
                $em->flush();
                return $this->redirect($this->generateUrl('admin_products'));
            }
            
        }
        $em = $this->getDoctrine()->getEntityManager();
        $products = $em->getRepository('AcmeUserBundle:Product')->findAll();
        return $this->render('AcmeUserBundle:Admin:add_product.html.twig', array('form'=>$form->createView()));



    }
    public function uploadAction(Request $request)
    {
        $product = new Product();
        $form = $this->createFormBuilder($product)
            ->add('name', "text")
            ->add('category', "text")
            ->add('file', "file")
            ->getForm()
            ;
        if ($this->getRequest()->getMethod() === 'POST') {
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $product->upload();
                $em->persist($product);
                $em->flush();
            }
        }
        $em = $this->getDoctrine()->getEntityManager();
        $products = $em->getRepository('AcmeUserBundle:Product')->findAll();
        return $this->render('AcmeUserBundle:Admin:add_product.html.twig', array('form'=>$form->createView()));
    }

}
