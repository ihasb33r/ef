<?php

namespace Acme\UserBundle\Controller;
use Acme\UserBundle\Entity\Buy;
use Acme\UserBundle\Entity\Rate;
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
        return $this->render('AcmeUserBundle:Votes:uservotes.html.twig', array('votesremaining'=>$notvotedyet, 'votescasted'=>$votescasted));
    }


    public function showreceivedAction(){

        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Buy')->createQueryBuilder("p");
        $votescasted = $em->getRepository('AcmeUserBundle:Rate')->findByCandidate($user->getId());
        return $this->render('AcmeUserBundle:Votes:receivedvotes.html.twig', array('votescasted'=>$votescasted));

    }

    public function showreceivedforAction($id){

        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->getRepository('AcmeUserBundle:Buy')->createQueryBuilder("p");
        $votescasted = $em->getRepository('AcmeUserBundle:Rate')->findByCandidate($id);
        return $this->render('AcmeUserBundle:Votes:receivedvotes.html.twig', array('votescasted'=>$votescasted));


    }

    public function voteAction($candidate)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $buy = $em->getRepository('AcmeUserBundle:Buy')->find($candidate);
        $vote = $this->getRequest()->get("vote");
        $comment = $this->getRequest()->get("comment");
        
        $rating=new Rate();
        $rating->setUser($user);
        $rating->setVath(intval($vote));
        $rating->setSxolia($comment);
        $rating->setCandidate($buy->getSell()->getUser());
        $em->persist($rating);
        $em->flush();
        $buy->setVote($rating);
        $em->persist($buy);
        $em->flush();
        
        return $this->redirect($this->generateUrl('givenvotes'));
        

    }

}
