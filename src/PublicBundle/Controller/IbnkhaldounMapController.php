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
    public function AllMapAction()
    {
        return $this->render('PublicBundle:IbnkhaldounMap:Allmap.html.twig');

    }
    public function discoverAction()
    {
        return $this->render('PublicBundle:IbnkhaldounMap:discover.html.twig');

    }
    public function contactsAction()
    {
        return $this->render('PublicBundle:IbnkhaldounMap:contacts.html.twig');

    }
}
