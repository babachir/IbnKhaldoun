<?php

namespace AdminBundle\Controller;

use EntityBundle\Entity;
use EntityBundle\Entity\Administrateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EntityBundle\Entity\Commentaire;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\AbstractType;
use Doctrine\ORM\EntityRepository;


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

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function create_adminAction(Request $request)
    {

        $session = $request->getSession();

        if(!$session->get('AdminAuth'))
        {
            return $this->redirect($this->generateUrl("login"));
        }


        $em = $this->getDoctrine()->getManager();

        $Admin = new Administrateur();

        $form_admin = $this->createFormBuilder($Admin)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('email',TextType::class)
            ->add('password',PasswordType::class)
            ->add('add',SubmitType::class)
            ->getForm();
        $form_admin->handleRequest($request);

        /*si le formulaire est valide */

        if($form_admin->isValid())
        {
            /**/
            $em->persist($Admin);
            $em->flush();
            return $this->redirect($this->generateUrl("admin_homepage"));
        }

        //$article->setLocalisation($localisation1);
        return $this->render('AdminBundle:Utilisateur:create_admin.html.twig',array( 'form'=> $form_admin->createView()));
    }

}
