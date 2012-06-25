<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class Loc_ApprovalController extends Controller
{
    public function indexAction()
    {

        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $id=$user->getId();


        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Location')->createQueryBuilder("l");
        $locat =  $qb
            ->innerJoin("l.user", "u")
            ->where($qb->expr()->andX(
                $qb->expr()->gt('l.date',':date'),
                $qb->expr()->eq('l.user',":user")
                ))
                ->setParameter('date', new \Datetime("today"))
                ->setParameter('user', $user->getId())
                ->orderby('l.date', 'ASC')
                ->getQuery()
                ->getResult();

        return $this->render('AcmeUserBundle:Organiser:locapproval.html.twig', array('items'=>$locat, 'id'=>$id));
    }
 
    public function publicAction($id)
    { 
        $em = $this->getDoctrine()->getEntityManager();
        $sell = $em->getRepository('AcmeUserBundle:Location')->findOneById($id);
        $sell->setPublic(true);
        $em->flush();

        return $this->indexAction();
    }
   
}
