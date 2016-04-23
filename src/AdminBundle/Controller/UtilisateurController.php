<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EntityBundle\Entity\Commentaire;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UtilisateurController extends Controller
{

    public function indexAction(Request $request)
    {
        $session = $request->getSession();

        if(!$session->get('AdminAuth'))
        {
            return $this->redirect($this->generateUrl("login"));
        }
        return $this->render('AdminBundle:Utilisateur:index.html.twig');
    }
    public function readComAction(Request $request)
    {
        $session = $request->getSession();

        if(!$session->get('AdminAuth'))
        {
            return $this->redirect($this->generateUrl("login"));
        }
        return $this->render('AdminBundle:Utilisateur:read.html.twig');
    }

    public function validateComAction($id,Request $request)
    {

        $session = $request->getSession();

        if(!$session->get('AdminAuth'))
        {
            return $this->redirect($this->generateUrl("login"));
        }

        $Commentairerepository = $this->getDoctrine()->getManager()->getRepository('EntityBundle:Commentaire');
        /*on récupére la localisation 1 (si elle existe pas faut pas oublier de la crée)*/
        $commentaire = $Commentairerepository->find($id);
        $commentaire->setIsvalide(1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($commentaire);
        $em->flush();
        return $this->redirect($this->generateUrl("admin_article_listcommentaire"));
    }
    public function deleteComAction($id,Request $request)
    {

        $session = $request->getSession();

        if(!$session->get('AdminAuth'))
        {
            return $this->redirect($this->generateUrl("login"));
        }

        $Commentairerepository = $this->getDoctrine()->getManager()->getRepository('EntityBundle:Commentaire');
        /*on récupére la localisation 1 (si elle existe pas faut pas oublier de la crée)*/
        $commentaire = $Commentairerepository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($commentaire);
        $em->flush();
        return $this->redirect($this->generateUrl("admin_article_listcommentaire"));

    }
}
