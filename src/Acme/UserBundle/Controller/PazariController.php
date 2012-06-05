<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\UserManager;

class PazariController extends Controller
{
    public function indexAction($category)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Location')->createQueryBuilder("p");
        $locat =  $qb
            ->innerJoin("p.product", "c")
            ->where($qb->expr()->andX(
                $qb->expr()->gt('p.date',':date'),
                $qb->expr()->eq('c.category',':category')))
                ->setParameter('date',new \DateTime("today"))
                ->setParameter('category', $category)
                ->orderby('p.date', 'ASC')
                ->getQuery()
                ->getResult();
        return $this->render('AcmeUserBundle:Default:pazari.html.twig',array('locations'=>$locat, 'category'=>$category));

    }
    public function newAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $locat = $em->getRepository('AcmeUserBundle:Location')
            ->createQueryBuilder("p")
            ->where('p.date > :date')
            ->setParameter('date',new \DateTime("today"))
            ->orderby('p.date', 'ASC')
            ->getQuery()
            ->getResult();

        return $this->render('AcmeUserBundle:Default:pazari.html.twig',array('locations'=>$locat));

    }
}
