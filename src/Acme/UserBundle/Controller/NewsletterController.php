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
    public function indexAction()
    {

        $request = $this->getRequest();
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
                        $msg = "Έχετε ήδη εγγραφεί στο newsletter!";
                    }else{
                        $newsletter = new Newsletter();
                        $newsletter->setEmail($email);
                        $newsletter->setIsSubscribed(true);
                        $em = $this->getDoctrine()->getEntityManager();
                        $em->persist($newsletter);
                        $em->flush();
                        $msg = "Γραφτήκατε επιτυχώς στο newsletter μας! Ευχαριστούμε.";
                    }
                }else{
                    if($user->getNewsletterSubscription()){
                        $msg = "Έχετε ήδη εγγραφεί στο newsletter!";
                    }else{
                        $user->setNewsletterSubscription(1);
                        $em = $this->getDoctrine()->getEntityManager();
                        $em->flush();                    
                        $msg = "Γραφτήκατε επιτυχώς στο newsletter μας! Ευχαριστούμε.";
                    }                
                }

            }
            catch (\Exception $e) {
                $msg = 'Ευχαριστούμε για το ενδιαφέρων σας';
            }

            if ($this->getRequest()->isXmlHttpRequest()) {
                return new \Symfony\Component\HttpFoundation\Response($msg);
                return array('msg' => $msg);
            }
            return $this->render('AcmeUserBundle:Default:newslatter.html.twig', array('msg' => $msg));
        } 
        return $this->render('AcmeUserBundle:Default:base.html.twig');
    }
    public function sendNewsLetterAction(){

        $em = $this->getDoctrine()->getEntityManager();
        $emails = $em->getRepository('AcmeUserBundle:Newsletter')->findAll();
        $locations =$em->getRepository('AcmeUserBundle:Location')
            ->createQueryBuilder("p")
            ->where('p.date > :date and p.approved=:approved and p.public=:public')
            ->setParameter('date',new \DateTime("today"))
            ->setParameter('approved',"1")
            ->setParameter('public',"1")
            ->orderby('p.date', 'ASC')
            ->getQuery()
            ->getResult();
        $news = $em->getRepository('AcmeUserBundle:NewsEntry')->findAll();
        $events = $em->getRepository('AcmeUserBundle:Events')->findAll();

        $mailmessage = \Swift_Message::newInstance()
            ->setContentType("text/html")
            ->setSubject('Newsletter ')
            ->setFrom("foroutsideview@gmail.com")
            ->setTo("bckdotgr@gmail.com")
            ->setBody($this->renderView('AcmeUserBundle:Email:newsletter.html.twig',array('locations'=>$locations,'news'=>$news) ))
            ;

        $this->get('mailer')->send($mailmessage);

        return $this->render('AcmeUserBundle:Email:newsletter.html.twig', array('locations'=>$locations,'news'=>$news));

    }
}
