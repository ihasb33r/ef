<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Entity\Location;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
class NewsletterController extends Controller
{
public function indexAction(Request $request)
{echo"why?";  
 if ($this->getRequest()->getMethod() === 'POST') {
          
    $email = $request->request->get('email');

    try {

        $email = $request->request->get('email');
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery(
            'SELECT u FROM AcmeUserBundle:User u WHERE u.email = :email'
        )->setParameter('email', $email);

        $user = $query->getSingleResult();

        if(!is_object($user)){ //this means anonymous user not registered to site
            $em = $this->getDoctrine()->getEntityManager();
            $query = $em->createQuery(
                'SELECT n FROM AcmeUserBundle:Newsletter n WHERE n.email = :email AND n.isSubscribed = 1'
            )->setParameter('email', $email);

            $record = $query->getSingleResult();

            if($record){
                $msg = "You are already subscribed!";
            }else{
                $newsletter = new Newsletter();
                $newsletter->setEmail($email);
                $newsletter->setIsSubscribed(true);

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($newsletter);
                $em->flush();

                $msg = "You have been subscribed to our newsletter! Thank You.";
            }
        }else{
            if($user->getNewsletterSubscription()){
                $msg = "You are already subscribed!";
            }else{
                $user->setNewsletterSubscription(1);
                $em = $this->getDoctrine()->getEntityManager();
                $em->flush();                    
                $msg = "You have been subscribed to our newsletter! Thank You.";
            }                
        }

    }
    catch (\Exception $e) {
        $msg = 'Υπήρξε κάποιο πρόβλημα. Προσπαθείστε αργότερα';
    }

    if ($this->getRequest()->isXmlHttpRequest()) {
        return new \Symfony\Component\HttpFoundation\Response($msg);
        return array('msg' => $msg);
    } return $this->render('AcmeUserBundle:Default:newslatter.html.twig', array('msg' => $msg));} 
	return $this->render('AcmeUserBundle:Default:base.html.twig');
}}