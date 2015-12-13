<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {  //(charger la vue index.html.twig qui se trouve dans Index)
        return $this->render('AdminBundle:Index:index.html.twig');
    }
}
