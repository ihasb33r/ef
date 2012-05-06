<?php

namespace Acme\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller ;
use FOS\UserBundle\Entity\UserManager;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Controller\ProfileController as BaseController;
use Symfony\Component\Security\Core\User\UserInterface;
use Acme\UserBundle\Entity\Sell;
use Acme\UserBundle\Entity\User;
class ProfileController extends Controller
{
 
    public function showAction()
    {
        $users = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($users) || !$users instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
		 $id[]=$users->getId();
		  $em = $this->getDoctrine()->getEntityManager();
		 $sell = $em->getRepository('AcmeUserBundle:Sell')->findAll(); 
		 $loc= $em->getRepository('AcmeUserBundle:Location')->findAll(); 
$product= $em->getRepository('AcmeUserBundle:Product')->findAll();
		$buy = $em->getRepository('AcmeUserBundle:Buy')->findAll(); 
			 
        return $this->container->get('templating')->renderResponse('AcmeUserBundle:Profile:show.html.'.$this->container->getParameter('fos_user.template.engine'), array('buy'=>$buy, 'sell'=>$sell, 'loc'=>$loc, 'id'=>$id, 'product'=>$product));
    }

    /**
     * Edit the user
     */
    public function editAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $form = $this->container->get('fos_user.profile.form');
        $formHandler = $this->container->get('fos_user.profile.form.handler');

        $process = $formHandler->process($user);
        if ($process) {
            $this->setFlash('fos_user_success', 'profile.flash.updated');

            return new RedirectResponse($this->container->get('router')->generate('fos_user_profile_show'));
        }

        return $this->container->get('templating')->renderResponse(
            'FOSUserBundle:Profile:edit.html.'.$this->container->getParameter('fos_user.template.engine'),
            array('form' => $form->createView(), 'theme' => $this->container->getParameter('fos_user.template.theme'))
        );
    }

    protected function setFlash($action, $value)
    {
        $this->container->get('session')->setFlash($action, $value);
    }
}