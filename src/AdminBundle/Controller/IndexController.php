<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{


    public function indexAction(Request $request)
    {

        $session = $request->getSession();

        if(!$session->get('AdminAuth'))
        {
            return $this->redirect($this->generateUrl("login"));
        }


        return $this->render('AdminBundle:Index:index.html.twig');
    }



}
