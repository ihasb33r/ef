<?php

namespace Acme\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;

class AgrotisController extends Controller
{
 
    public function indexAction()
    {
      
			 
        return $this->container->get('templating')->renderResponse('AcmeUserBundle:Agrotis:agrotis.html.twig');
    }

  }