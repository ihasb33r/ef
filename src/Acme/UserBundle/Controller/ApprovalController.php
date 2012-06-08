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
    public function indexAction(Request $request)
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
                $qb->expr()->eq('l.approved',':approval'),
                $qb->expr()->gt('l.date',':date'),
                $qb->expr()->eq('l.user',":user")
                ))
                ->setParameter('approval', "0")
                ->setParameter('date', new \Datetime("today"))
                ->setParameter('user', $user->getId())
                ->orderby('l.date', 'ASC')
                ->getQuery()
                ->getResult();
        /*

        $locat =  $qb
            ->innerJoin("p.location", "l")
            ->innerJoin("l.user", "u")
            ->where($qb->expr()->eq('u.id',':user')
                )
                ->setParameter("user", $user->getId())
                ->orderby('l.date', 'ASC')
                ->getQuery()
                ->getResult();
         */


        //        $em = $this->getDoctrine()->getEntityManager();
        //		$location = $em->getRepository("AcmeUserBundle:Location")->findAll();
        //		$sell = $em->getRepository("AcmeUserBundle:Sell")->findAll();
        return $this->render('AcmeUserBundle:Organiser:approval.html.twig', array('items'=>$locat, 'id'=>$id));
    }
    public function okAction($id)
    { 
        $em = $this->getDoctrine()->getEntityManager();
        $sell = $em->getRepository('AcmeUserBundle:Sell')->findById($id);
        echo $sell->getId();
        $sell->setApproved(true);
        $em->flush();

        return $this->indexAction();
    }
    public function noAction($id)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $sell= $em->getRepository('AcmeUserBundle:Sell')->findOneById($id);
        $em->remove($sell);
        $em->flush();

        return $this->indexAction();
    }
}
