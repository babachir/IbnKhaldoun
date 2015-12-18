<?php

namespace AdminBundle\Controller;

use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\FloatType;
use EntityBundle\Entity\Administrateur;
use EntityBundle\Entity;
use EntityBundle\Entity\Image;
use EntityBundle\Entity\Article;
use Proxies\__CG__\EntityBundle\Entity\Localisation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type;



class ArticleController extends Controller
{
    public function indexAction()
    {

        $news = $this->getDoctrine()
            ->getRepository('EntityBundle:Article')
            ->findAll();
        if (!$news) {
            throw $this->createNotFoundException('No news found');
        }

        $build['news'] = $news;
        return $this->render('AdminBundle:Article:index.html.twig',$build);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function create_localisationAction(Request $request)
    {
        /*on charge le manager a fin de faire des entrés dans la base de données*/
        $em = $this->getDoctrine()->getManager();
        $localisation = new Localisation();
        $form_localisation = $this->createFormBuilder($localisation)
            ->add('nom',TextType::class)
            ->add('longitude',TextType::class)
            ->add('latitude',TextType::class)
            ->add('add',Type\SubmitType::class)
            ->getForm();
        $form_localisation->handleRequest($request);

        /*si le formulaire est valide */

        if($form_localisation->isValid())
        {
            /**/
            $em->persist($localisation);
            $em->flush();
            return $this->redirect($this->generateUrl("admin_create_img",array('idLocalisation' => $localisation->getId())));
        }

        //$article->setLocalisation($localisation1);
        return $this->render('AdminBundle:Article:create_localisation.html.twig',array( 'form'=> $form_localisation->createView()));
    }

    public function create_imgAction($idLocalisation,Request $request)
    {
        /*on charge le manager a fin de faire des entrés dans la base de données*/
        $em = $this->getDoctrine()->getManager();
        $image = new Image();
        $form_img = $this->createFormBuilder($image)
            ->add('urlImg',TextType::class)
            ->add('add',Type\SubmitType::class)
            ->getForm();

        $form_img->handleRequest($request);

        /*si le formulaire est valide */

        if($form_img->isValid())
        {
            /**/
            $em->persist($image);
            $em->flush();
            return $this->redirect($this->generateUrl("admin_create_article",array('idImage' => $image->getId(),'idLocalisation' => $idLocalisation)));
        }

        //$article->setLocalisation($localisation1);
        return $this->render('AdminBundle:Article:create_img.html.twig',array( 'form'=> $form_img->createView()));
    }

    public function createAction($idImage,$idLocalisation,Request $request)
    {
        /*pour charcher le repository afin de lire la base de données*/
        $Localisationrepository = $this->getDoctrine()->getManager()->getRepository('EntityBundle:Localisation');
        /*on récupére la localisation 1 (si elle existe pas faut pas oublier de la crée)*/
        $localisation1 = $Localisationrepository->find($idLocalisation);
        /*on charge le manager a fin de faire des entrés dans la base de données*/
       // var_dump($localisation1);
        $ImageRepository = $this->getDoctrine()->getManager()->getRepository('EntityBundle:Image');
        $image1 = $ImageRepository->find($idImage);


        $em = $this->getDoctrine()->getManager();
        $article = new Article();
        $article->setLocalisation($localisation1);
        $article->setImage($image1);
        $form_article = $this->createFormBuilder($article)
            ->add('titre',TextType::class)
            ->add('description',TextType::class)
            ->add('source',TextType::class)
            ->add('dateDebut',DateType::class)
            ->add('dateFin',DateType::class)
            ->add('add',Type\SubmitType::class)
            ->getForm();

        $form_article->handleRequest($request);
        /*si le formulaire est valide */

        if($form_article->isValid())
        {
            /**/
            $em->persist($article);
            $em->flush();
            // return $thirect($s->redithis->generateUrl("admin_create_article",array('idImage' => $image->getId()),array('idLocalisation' => $idLocalisation)));
        }
        return $this->render('AdminBundle:Article:create.html.twig',array( 'form'=> $form_article->createView()));
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function updateAction($id)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $testimonial = $em->getRepository('EntityBundle:Article')->find($id);
        $form = $this->createForm(new Article(), $testimonial);
        var_dump($form);
        $request = $this->get('request');
        var_dump($request);
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            echo $testimonial->getName();

            if ($form->isValid()) {
                // perform some action, such as save the object to the database
                //$testimonial = $form->getData();
                echo 'testimonial: ';
                echo var_dump($testimonial);
                $em->persist($testimonial);
                $em->flush();

                return $this->redirect($this->generateUrl('admin_update_article'));
            }
        }

        return $this->render('AdminBundle:Article:update.html.twig', array(
            'form' => $form->createView()
        ));

    }
    public function deleteAction($id)
    {
        /*ne doit pas avoir de vue */
        return $this->render('AdminBundle:Article:update.html.twig');
    }
    public function readAction($id)
    {

        $news = $this->getDoctrine()
            ->getRepository('EntityBundle:Article')
            ->find($id);
        if (!$news) {
            throw $this->createNotFoundException('No news found by id ' . $id);
        }

        $build['news_item'] = $news;
        return $this->render('AdminBundle:Article:read.html.twig', $build);



    }



    public function listAction()
    {
        /*ne doit pas avoir de vue */
        return $this->render('AdminBundle:Article:list.html.twig');
    }



    /*prend en enter un objet de type request afin de récupéré le POST du formulaire */
    public function testAction(Request $request)
    {
        /*on charge le manager a fin de faire des entrés dans la base de données*/
        $em = $this->getDoctrine()->getManager();

        /*comment créer des relation*/


        /*utilisation de l'entity article présente dans EntityBundle/EntityA/Article.php*/

        //$article = new Article();
        /*la méthode setLocalisation prend en entrer une entity de type Localisation , donc il faut la chercher
        d'abords , si elle existe pas faut donc la créeer avant de la chercher afin de crée une relation entre un article
        et une localisation
        */

        /*pour charcher le repository afin de lire la base de données*/
        //$Localisationrepository = $this->getDoctrine()->getManager()->getRepository('EntityBundle:Localisation');

        /*on récupére la localisation 1 (si elle existe pas faut pas oublier de la crée)*/
        //$localisation1 =$Localisationrepository->find(1);

        /*on crée une relation entre l'article qu'on vien de crée et la localisation numéro 1*/


        //$article->setLocalisation($localisation1);


        /*utilisation de l'entity administrateur présente dans EntityBundle/EntityAdministrateur.php*/
        $administrateur = new Administrateur();

        /*déclaration d'un formulaire pour l'entity Administrateur*/
        $form = $this->createFormBuilder($administrateur)
                    ->add('email',TextType::class)
                    ->add('nom',TextType::class)
                    ->add('password',TextType::class)
                    ->add('prenom',TextType::class)
                    ->add('add',Type\SubmitType::class)
                    ->getForm();


        /*récupéré la requete post et on la met dans l'entity Administrateur qu'on a crée précédament */
        $form->handleRequest($request);

        /*si le formulaire est valide */

        if($form->isValid())
        {
            /**/
            $em->persist($administrateur);
            $em->flush();
            return $this->redirect($this->generateUrl("admin_delete_article",array('id' => $administrateur->getId())));
        }

        return $this->render('AdminBundle:Article:test.html.twig',array( 'form'=> $form->createView()));






        /*le code qui suit est explicatif, ne sera jamais exécuté */

        /*faire des set des atribut*/
        $administratuer->setEmail("test");
        $administratuer->setNom("test");
        $administratuer->setPassword("test");
        $administratuer->setPrenom("test");



        /*on persiste l'entity administrateur*/
        //$em->persist($administratuer);
        /*on fait un flush a fin que tout les actions précédente soit prise en compte qu'une fois toute exécuté pour
        faire l'entrer dans la base de données*/
        //$em->flush();


        /*pour charger le repository afin de lire de la base de donnée*/
        //$repository = $this->getDoctrine()->getManager()->getRepository('EntityBundle:Administrateur');

        /*récupéré l'administirateur qui a l'ID numéro 1*/
        //$administratuer1 = $repository->find(1);

        /*envoyer l'administrateur a la vue */
        //return $this->render('AdminBundle:Article:test.html.twig',array( 'administrateur'=> $administratuer1 ));
    }


}
