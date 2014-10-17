<?php

namespace Acme\WelcomePageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $surname)
    {
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Zmiany zostały zapisane!'
        );
        
        return $this->render('AcmeWelcomePageBundle:Default:index.html.twig', array('name' => $name, 'surname' => $surname));
    }
}
