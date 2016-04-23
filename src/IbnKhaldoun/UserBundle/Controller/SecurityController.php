<?php
// src/OC/UserBundle/Controller/SecurityController.php;

namespace IbnKhaldoun\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType ;
use Symfony\Component\Form\Extension\Core\Type\SubmitType ;
use EntityBundle\Entity\Administrateur;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {



        $session = $request->getSession();
        $session->set('AdminAuth', false);


        $em = $this->getDoctrine()->getManager();
        $Admin = new Administrateur();
        $form_login = $this->createFormBuilder($Admin)
            ->add('Email',TextType::class)
            ->add('Password',PasswordType::class)
            ->add('add',SubmitType::class)
            ->getForm();
        $form_login->handleRequest($request);

        if($form_login->isValid())
        {
            $Adminrepository = $this->getDoctrine()->getManager()->getRepository('EntityBundle:Administrateur');
            $AllAdmin = $Adminrepository->findAll();
            foreach($AllAdmin as $Item)
            {
                if(($Item->getEmail()==$Admin->getEmail()) && ($Item->getPassword()==$Admin->getPassword() ))
                {

                    $session->set('AdminAuth', true);
                    return $this->redirect($this->generateUrl("admin_homepage"));


                }

            }
            return $this->redirect($this->generateUrl("login"));


        }

        return $this->render('IbnKhaldounUserBundle:Security:login.html.twig',array( 'form'=> $form_login->createView()));
    }
}