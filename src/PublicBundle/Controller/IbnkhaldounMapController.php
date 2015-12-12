<?php

namespace PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IbnkhaldounMapController extends Controller
{
    public function indexAction()
    {
        return $this->render('PublicBundle:IbnkhaldounMap:index.html.twig');
    }

    public function mapAction()
    {
        return $this->render('PublicBundle:IbnkhaldounMap:map.html.twig');
    }
}
