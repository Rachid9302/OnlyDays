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
        $listbienaccueils = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->findAll();

        $listactualiteaccueils = $this->getDoctrine()
            ->getRepository('AppBundle:Actualite')
            ->findAll();

      return $this->render('template/index.html.twig', array(
          'listbienaccueils' => $listbienaccueils,
          'listactualiteaccueils' => $listactualiteaccueils
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
     * @Route("/decouvrirlyon", name="decouvrirlyon")
     */
    public function decouvrirlyonAction()
    {
        $annonces = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->findAll();

        return $this->render('template/decouvrirlyon.html.twig', array(
            'annonces' => $annonces
        ));
    }


}
