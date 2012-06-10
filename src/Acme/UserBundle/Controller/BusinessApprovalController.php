<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class BusinessApprovalController extends Controller
{
    public function indexAction()
    {

        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $id=$user->getId();


        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:SellBusiness')->createQueryBuilder("p");
        $locat =  $qb
            ->where($qb->expr()->andX(
                $qb->expr()->eq('p.user',":user")
                ))
                ->andWhere("p.approved is Null")
                ->setParameter('user', $user->getId())
                ->getQuery()
                ->getResult();

        return $this->render('AcmeUserBundle:Business:approval.html.twig', array('items'=>$locat, 'id'=>$id));
    }
    public function isApprovedAction($approval)
    {

        if (is_null($approval)){
         
            return $this->indexAction();
        }

        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $id=$user->getId();


        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Sellbusiness')->createQueryBuilder("p");
        $locat =  $qb
            ->where($qb->expr()->andX(
                $qb->expr()->eq('p.approved',":approved"),
                $qb->expr()->eq('l.user',":user")
                ))
                ->setParameter('approved', $approval==="true")
                ->setParameter('user', $user->getId())
                ->getQuery()
                ->getResult();

        return $this->render('AcmeUserBundle:Organiser:approval.html.twig', array('items'=>$locat, 'id'=>$id));
    }
    public function okAction($id)
    { 
        $em = $this->getDoctrine()->getEntityManager();
        $sell = $em->getRepository('AcmeUserBundle:Sellbusiness')->findOneById($id);
        $sell->setApproved(true);
        $em->flush();

        return $this->indexAction();
    }
    public function noAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $sell = $em->getRepository('AcmeUserBundle:Sellbusiness')->findOneById($id);
        $sell->setApproved(false);
        $em->flush();

        return $this->indexAction();
    }
}
