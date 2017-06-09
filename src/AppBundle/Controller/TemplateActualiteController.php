<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TemplateActualiteController extends Controller
{
    /**
     * @Route("/listeactualite", name="listeactualite")
     */
    public function listeactualiteAction()
    {
        $listactualites = $this->getDoctrine()
            ->getRepository('AppBundle:Actualite')
            ->findAll();

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $listactualites,
            $request->query->getInt('page', 1)/*page number*/,
            9/*limit per page*/
        );

        return $this->render('template/listeactualite.html.twig', array(
            'listactualites' => $result
        ));
    }





    /**
     * @Route("/detailactualite", name="detailactualite")
     */
    public function detailactualiteAction()
    {
        return $this->render('template/detailactualite.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}