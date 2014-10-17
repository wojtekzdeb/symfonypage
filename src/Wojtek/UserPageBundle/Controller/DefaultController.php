<?php

namespace Wojtek\UserPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WojtekUserPageBundle:Default:index.html.twig', array('name' => $name));
    }
}
