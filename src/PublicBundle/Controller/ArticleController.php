<?php

namespace PublicBundle\Controller;

use EntityBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \DateTime;
use EntityBundle\Entity\Commentaire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type;

class ArticleController extends Controller
{
    public function indexAction()
    {
        return $this->render('PublicBundle:Article:index.html.twig');
    }

    public function readAction($id  ,Request $request)
    {
        $session = $request->getSession();
        $ArticleRepository = $this->getDoctrine()->getManager()->getRepository('EntityBundle:Article');

        $article = $ArticleRepository->find($id);
        $em = $this->getDoctrine()->getManager();
        $commentaire = new Commentaire();

        $form = $this->createFormBuilder($commentaire)
                ->add('pseudo',TextType::class)
                ->add('contenu',TextType::class)
                ->add('commenter', Type\SubmitType::class)
                ->getForm();
        $form->handleRequest($request);
        if($form->isValid())
        {
            /**/
            $commentaire->setIsvalide('0');
            $commentaire->setArticle($article);
            $em->persist($commentaire);
            $em->flush();
            $this->addFlash(
                'notice',
                'Commentaire en attente de validation par l\'Administratue!'
            );
            return $this->redirect($this->generateUrl("public_readarticle",array('id' => $article->getId())));
            //return $this->render('PublicBundle:Article:read.html.twig', array('article'  => $article ,'form'=> $form->createView()));
        }




        return $this->render('PublicBundle:Article:read.html.twig', array('article'  => $article,'urlImage'=> $article->getImage()->getUrlImg(),
            'form'=> $form->createView(),'commentaires'=>$article->getCommentaires() ));
    }
    public function getjsonarticlesAction($year)
    {

        $articleRepository = $this->getDoctrine()->getManager()->getRepository('EntityBundle:Article');
        $date = new DateTime($year.'-01-01');

        $datas=$articleRepository->findAll();
        $arrayArticle = array();

        foreach($datas as $data ) {
            if ($data->getDateDebut()->format("Y")==$year) {
                $arrayArticle[] = array('id' => $data->getId(), 'titre' => $data->getTitre(), 'DateDebut' => $data->getDateDebut()->format("Y"),
                    'DateFin' => $data->getDateFin()->format("Y"), 'place' => $data->getLocalisation()->getNom(),
                    'longitude' => $data->getLocalisation()->getLongitude(), 'latitude' => $data->getLocalisation()->getLatitude());


            }

        }
        $response = new \Symfony\Component\HttpFoundation\Response(json_encode($arrayArticle));
        return $response;
    }


}
