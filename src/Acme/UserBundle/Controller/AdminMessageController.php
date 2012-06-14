<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Message;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class AdminMessageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $messages = $em->getRepository("AcmeUserBundle:Message")->createQueryBuilder("m")
            ->orderby("m.date", "DESC")->getQuery()->getResult();

        return $this->render('AcmeUserBundle:Admin:messagelist.html.twig', array("messages"=>$messages));
    }
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $message = $em->getRepository("AcmeUserBundle:Message")->findOneById($id);

        return $this->render('AcmeUserBundle:Admin:messageview.html.twig', array("message"=>$message));
    }
    public function deleteAction($id){

        $em = $this->getDoctrine()->getEntityManager();
        $message = $em->getRepository('AcmeUserBundle:Message')->findOneById($id);
        $em->remove($message);
        $em->flush();
        return $this->redirect($this->generateUrl('admin_messages'));

    }

}
