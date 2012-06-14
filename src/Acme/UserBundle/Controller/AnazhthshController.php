<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class AnazhthshController extends Controller
{
    public function indexAction()
    { 
			 $em = $this->getDoctrine()->getEntityManager();
			 $qb = $em->getRepository('AcmeUserBundle:Location')->createQueryBuilder("p");
            $locat =  $qb
            ->innerJoin("p.product", "c")
            ->where($qb->expr()->gt('p.date',':date'))
            ->setParameter('date',new \DateTime("today"))
			->orderby('p.date', 'ASC')
            ->getQuery()
            ->getResult();

      return $this->render('AcmeUserBundle:User:anazhthsh.html.twig', array('locat'=>$locat));  
    }
    public function newAction()
    {

        return $this->render('AcmeUserBundle:Organiser:add_location.html.twig');
    }
}
