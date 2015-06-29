<?php

namespace PonyF\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PonyFUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
