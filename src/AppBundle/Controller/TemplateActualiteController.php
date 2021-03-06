<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CommentaireNews;
use AppBundle\Form\CommentaireNewsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TemplateActualiteController extends Controller
{
    /**
     * @Route("/listeactualite", name="listeactualite")
     */
    public function listeactualiteAction(Request $request)
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
     * @Route("/detailactualite/{id}", name="detailactualite", requirements={"id"="\d+"})
     */
    public function detailactualiteAction(Request $request, $id)
    {
        $detailactualite = $this->getDoctrine()
            ->getRepository('AppBundle:Actualite')
            ->find($id);

        $listactualites = $this->getDoctrine()
            ->getRepository('AppBundle:Actualite')
            ->findAll();

        $listbiens = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->findAll();

        $noteActualite = $this->getDoctrine()
            ->getRepository('AppBundle:CommentaireNews')
            ->noteActualite($detailactualite);

        if(!$detailactualite){
            throw $this-> createNotFoundException('La page n\'existe pas ');
        }

        $utilisateur = $this->getUser();
        $entity = new CommentaireNews();

        $form = $this->createForm(CommentaireNewsType::class ,$entity);

        if($request->isMethod('POST'))
        {
            $form->HandleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $entity->setAuteur($utilisateur);
                $entity->setActualite($detailactualite);
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('listeactualite'));
            }
        }

        return $this->render('template/detailactualite.html.twig', array(
            'detailactualite' => $detailactualite,
            'listactualites' => $listactualites,
            'listbiens' => $listbiens,
            'noteActualite' => $noteActualite,
            'form' => $form->createView()
        ));
    }
}