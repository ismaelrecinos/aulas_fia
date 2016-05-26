<?php

namespace AulasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AulasBundle:Default:index.html.twig');
    }
}
