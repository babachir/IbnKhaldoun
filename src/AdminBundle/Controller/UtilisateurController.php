<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateurController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:Utilisateur:index.html.twig');
    }
    public function readComAction()
    {
        return $this->render('AdminBundle:Utilisateur:read.html.twig');
    }

    public function validateComAction($id)
    {
        /*ne doit pas avoir de vue */
        return $this->render('AdminBundle:Utilisateur:read.html.twig');
    }
    public function deleteComAction($id)
    {
        /*ne doit pas avoir de vue */
        return $this->render('AdminBundle:Utilisateur:read.html.twig');
    }
}
