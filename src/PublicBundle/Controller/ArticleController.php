<?php

namespace PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \DateTime;

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
