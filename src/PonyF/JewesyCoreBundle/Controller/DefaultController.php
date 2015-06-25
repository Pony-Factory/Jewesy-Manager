<?php

namespace PonyF\JewesyCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PonyFJewesyCoreBundle:Default:index.html.twig');
    }
}
