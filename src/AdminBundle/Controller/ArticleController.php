<?php

namespace AdminBundle\Controller;

use EntityBundle\Entity\Administrateur;
use EntityBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type;



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
    public function readAction($id)
    {

        return $this->render('AdminBundle:Article:read.html.twig');
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
