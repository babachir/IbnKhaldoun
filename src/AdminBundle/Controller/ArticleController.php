<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:Article:index.html.twig');
    }

    public function createAction()
    {
        return $this->render('AdminBundle:Article:create.html.twig');
    }
    public function updateAction($id)
    {
        return $this->render('AdminBundle:Article:update.html.twig');
    }
    public function deleteAction($id)
    {
        /*ne doit pas avoir de vue */
        return $this->render('AdminBundle:Article:update.html.twig');
    }

}
