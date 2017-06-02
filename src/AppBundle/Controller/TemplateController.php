<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TemplateController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function indexAction()
    {
      return $this->render('template/index.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
      ]);
    }

    /**
     * @Route("/listebien", name="listebien")
     */
    public function listeBienAction(Request $request)
    {
        $listbiens = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->findAll();

        return $this->render('template/listebien.html.twig', array(
            'listbiens' => $listbiens
        ));
    }

    /**
     * @Route("/detailbien/{id}", name="detailbien", requirements={"id"="\d+"})
     */
    public function detailbienAction($id)
    {
        $detailbien = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->find($id);
        if(!$detailbien){
            throw $this-> createNotFoundException('Aucun produit ne correspond à l\'id'.$id);
        }

        return $this->render('template/detailbien.html.twig', array(
            'detailbien' => $detailbien
        ));
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('template/contact.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/mentions-legales", name="mentions-legales")
     */
    public function mentionsLegalesAction()
    {
        return $this->render('template/mentions-legales.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/faq", name="faq")
     */
    public function faqAction()
    {
        return $this->render('template/faq.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

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

    /**
     * @Route("/decouvrirlyon", name="decouvrirlyon")
     */
    public function decouvrirlyonAction()
    {
        return $this->render('template/decouvrirlyon.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }


}
