<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Message;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class MessageController extends Controller
{
    public function indexAction()
    {
        $message = new Message();
        $form = $this->createFormBuilder($message)
            ->add('sender', "text")
            ->add('message', "textarea")
            ->getForm()
            ;

        if ($this->getRequest()->getMethod()==="POST"){
            $form->bindRequest($this->getRequest());
            if ($form->isValid()){
                $em = $this->getDoctrine()->getEntityManager();
                $message->setDate(new \DateTime("today"));
                $em->persist($message);
                $em->flush();

            $mailmessage = \Swift_Message::newInstance()
                ->setContentType("text/html")
                ->setSubject('mail from' . $message->getSender())
                ->setFrom($message->getSender())
                ->setTo("foroutsideview@gmail.com")
                ->setBody($this->renderView('AcmeUserBundle:Email:email.txt.twig', array('content' => $message->getMessage())))
                ;

            $this->get('mailer')->send($mailmessage);

            }

            return $this->render('AcmeUserBundle:Messaging:thankyou.html.twig');
        }
        return $this->render('AcmeUserBundle:Messaging:sendform.html.twig', array("form"=>$form->createView()));
    }
}
