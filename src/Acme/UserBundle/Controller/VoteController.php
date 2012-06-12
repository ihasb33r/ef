<?php

namespace Acme\UserBundle\Controller;
use Acme\UserBundle\Entity\Buy;
use Acme\UserBundle\Entity\Rating;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;

class VoteController extends Controller
{

    public function showgivenAction(){
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Buy')->createQueryBuilder("p");
        $notvotedyet =  $qb
            ->where($qb->expr()->andX(
                $qb->expr()->eq('p.user',":user")
                ))
                ->andWhere("p.vote is Null")
                ->setParameter('user', $user->getId())
                ->getQuery()
                ->getResult();
        $votescasted = $em->getRepository('AcmeUserBundle:Rate')->findByUser($user->getId());
/*
        $user_id = $user->getId();
        $votes_remaining =$em->getRepository('AcmeUserBundle:Buy')->findByUser($user_id);
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $votes = $em->getRepository('AcmeUserBundle:Rate')->findByCandidate($id);
 */
        return $this->render('AcmeUserBundle:Votes:uservotes.html.twig', array('votesremaining'=>$notvotedyet, 'votescasted'=>$votescasted));
    }


    public function voteAction($canditate, $vote )
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $location = $em->getRepository('AcmeUserBundle:Rate')->findOneByUser($id);

    }

}
