<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('wojtek_user_page_homepage', new Route('/test/{name}', array(
    '_controller' => 'WojtekUserPageBundle:Default:index',
), array('_name' => '^[A-Za-z]$')));

return $collection;
