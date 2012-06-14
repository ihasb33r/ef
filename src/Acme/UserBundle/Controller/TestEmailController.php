<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Message;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class TestEmailController extends Controller
{
    public function indexAction($name, $email)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('foroutsideview@gmail.com')
            ->setTo($email)
            ->setBody($this->renderView('AcmeUserBundle:Email:email.txt.twig', array('name' => $name)))
            ;

        $this->get('mailer')->send($message);

        return $this->render('AcmeUserBundle:Messaging:thankyou.html.twig', array("name"=>$name));
    }
}
