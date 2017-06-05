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
        return $this->render('template/listeactualite.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
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