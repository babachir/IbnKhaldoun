<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EntityBundle\Entity\Commentaire;

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
        $Commentairerepository = $this->getDoctrine()->getManager()->getRepository('EntityBundle:Commentaire');
        /*on récupére la localisation 1 (si elle existe pas faut pas oublier de la crée)*/
        $commentaire = $Commentairerepository->find($id);
        $commentaire->setIsvalide(1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($commentaire);
        $em->flush();
        return $this->redirect($this->generateUrl("admin_article_listcommentaire"));
    }
    public function deleteComAction($id)
    {

        $Commentairerepository = $this->getDoctrine()->getManager()->getRepository('EntityBundle:Commentaire');
        /*on récupére la localisation 1 (si elle existe pas faut pas oublier de la crée)*/
        $commentaire = $Commentairerepository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($commentaire);
        $em->flush();
        return $this->redirect($this->generateUrl("admin_article_listcommentaire"));

    }
}
