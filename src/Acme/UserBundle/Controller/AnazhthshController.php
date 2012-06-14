<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Location;
use Acme\UserBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class AnazhthshController extends Controller
{
    public function indexAction()
    { 
			 $em = $this->getDoctrine()->getEntityManager();
             $products =$em->getRepository("AcmeUserBundle:Product")->findAll();
			 $qb = $em->getRepository('AcmeUserBundle:Location')->createQueryBuilder("p");
            $locat =  $qb
                ->select("p.town")
                ->distinct()
                ->where("p.town<>'' ")
                ->getQuery()
                ->getResult();

             if ($this->getRequest()->get("search")=="search"){

                 $town = $this->getRequest()->get("town");
                 $product = $this->getRequest()->get("product");
                 $qb = $em->getRepository('AcmeUserBundle:Location')->createQueryBuilder("p");
                 $qb
                ->where('p.date>=:date')
                ->setParameter('date',new \DateTime("today"));

                 if (!empty($town)){
                     $qb->andwhere('p.town like :town')
                         ->setParameter('town', $town);
                 }
                 if (!empty($product)){
                     $qb->andwhere('p.product= :product')
                         ->setParameter('product', $em->getRepository('AcmeUserBundle:Product')->findOneById($product));
                 }

                 $results = $qb->orderby('p.date', 'ASC')
                ->getQuery()->getResult();
              return $this->render('AcmeUserBundle:User:anazhthsh.html.twig', array('locat'=>$locat, "products"=>$products, "results"=>$results));  

             }

      return $this->render('AcmeUserBundle:User:anazhthsh.html.twig', array('locat'=>$locat, "products"=>$products));  
    }
    public function newAction()
    {

        return $this->render('AcmeUserBundle:Organiser:add_location.html.twig');
    }
}
