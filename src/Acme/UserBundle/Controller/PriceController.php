<?php

namespace Acme\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;

class PriceController extends Controller
{
 
    public function newAction()
    {
      
			 
        return $this->container->get('templating')->renderResponse('AcmeUserBundle:Default:price.html.twig');
    }

  }