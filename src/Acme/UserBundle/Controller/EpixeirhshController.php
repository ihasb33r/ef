<?php

namespace Acme\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;

class EpixeirhshController extends Controller
{
 
    public function indexAction()
    {
      
			 
        return $this->container->get('templating')->renderResponse('AcmeUserBundle:Business:epixeirhsh.html.twig');
    }

  }