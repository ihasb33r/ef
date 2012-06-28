<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class ApprovalController extends Controller
{
    public function indexAction()
    {

        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $id=$user->getId();


        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Sell')->createQueryBuilder("p");
        $locat =  $qb
            ->innerJoin("p.location", "l")
            ->where($qb->expr()->andX(
                $qb->expr()->gt('l.date',':date'),
                $qb->expr()->eq('l.user',":user")
                ))
                ->setParameter('date', new \Datetime("today"))
                ->setParameter('user', $user->getId())
                ->orderby('l.date', 'ASC')
                ->getQuery()
                ->getResult();
$template_vars=array(
            'items'=>$locat,
            'approve_path'=>'ok',
            'delete_path'=>'no');
        return $this->render('AcmeUserBundle:Organiser:approval.html.twig',$template_vars);
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
        $qb = $em->getRepository('AcmeUserBundle:Sell')->createQueryBuilder("p");
        $locat =  $qb
            ->innerJoin("p.location", "l")
            ->where($qb->expr()->andX(
                $qb->expr()->eq('p.approved',":approved"),
                $qb->expr()->gt('l.date',':date'),
                $qb->expr()->eq('l.user',":user")
                ))
                ->setParameter('date', new \Datetime("today"))
                ->setParameter('approved', $approval==="true")
                ->setParameter('user', $user->getId())
                ->orderby('l.date', 'ASC')
                ->getQuery()
                ->getResult();

        return $this->render('AcmeUserBundle:Organiser:approval.html.twig', array('items'=>$locat, 'id'=>$id));
    }
    public function okAction($id)
    { 
        $em = $this->getDoctrine()->getEntityManager();
        $sell = $em->getRepository('AcmeUserBundle:Sell')->findOneById($id);
        $sell->setApproved(true);
        $em->flush();

        return $this->indexAction();
    }
    public function noAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $sell = $em->getRepository('AcmeUserBundle:Sell')->findOneById($id);
        $sell->setApproved(false);
        $em->flush();

        return $this->indexAction();
    }
}
