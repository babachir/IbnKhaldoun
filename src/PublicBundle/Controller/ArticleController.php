<?php

namespace PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function indexAction()
    {
        return $this->render('PublicBundle:Article:index.html.twig');
    }

    public function readAction($id)
    {
        return $this->render('PublicBundle:Article:read.html.twig', array('id'  => $id));
    }


}
