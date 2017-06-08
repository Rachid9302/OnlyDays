<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TemplateAnnonceController extends Controller
{
    /**
     * @Route("/listebien", name="listebien")
     */
    public function listebienAction(Request $request)
    {
        $listbiens = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->findAll();

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $listbiens,
            $request->query->getInt('page', 1)/*page number*/,
            9/*limit per page*/
        );

        return $this->render('template/listebien.html.twig', array(
            'listbiens' => $result
        ));
    }

    /**
     * @Route("/listebienrecherche", name="listebien_recherche")
     */
    public function listebienRechercheAction(Request $request)
    {

        $data = $request->get('recherche');

        $search = array(
            'type' => isset($data['type']) ? $data['type'] : 'error',
            'date_debut' => isset($data['date_debut']) ? $data['date_debut'] : 'error',
            'date_fin' => isset($data['date_fin']) ? $data['date_fin'] : 'error',
            'prix' => isset($data['prix']) ? $data['prix'] : 'error',
        );

        // test si chaque elements existent


        $listbiens = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->rechercherAnnonces($search);


        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $listbiens,
            $request->query->getInt('page', 1)/*page number*/,
            9/*limit per page*/
        );

        return $this->render('template/listebien.html.twig', array(
            'listbiens' => $result
        ));
    }

    /**
     * @Route("/listebienrechercheavance", name="listebien_recherche_avance")
     */
    public function listebienRechercheAvanceAction(Request $request)
    {

        $data = $request->get('rechercheavance');


        $search = array(
            'type' => isset($data['type']) ? $data['type'] : 'error',
            'date_debut' => isset($data['date_debut']) ? $data['date_debut'] : 'error',
            'date_fin' => isset($data['date_fin']) ? $data['date_fin'] : 'error',
            'arrondissement' => isset($data['arrondissement']) ? $data['arrondissement'] : 'error',
            'prix_min' => isset($data['prix_min']) ? $data['prix_min'] : 'error',
            'prix_max' => isset($data['prix_max']) ? $data['prix_max'] : 'error',
            'surface_min' => isset($data['surface_min']) ? $data['surface_min'] : 'error',
            'surface_max' => isset($data['surface_max']) ? $data['surface_max'] : 'error',
            'piece_min' => isset($data['piece_min']) ? $data['piece_min'] : 'error',
            'piece_max' => isset($data['piece_max']) ? $data['piece_max'] : 'error',
            'chambre_min' => isset($data['chambre_min']) ? $data['chambre_min'] : 'error',
            'chambre_max' => isset($data['chambre_max']) ? $data['chambre_max'] : 'error',


        );

        // test si chaque elements existent


        $listbiens = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->rechercherAnnoncesAvances($search);


        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $listbiens,
            $request->query->getInt('page', 1)/*page number*/,
            9/*limit per page*/
        );

        return $this->render('template/listebien.html.twig', array(
            'listbiens' => $result
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
            throw $this-> createNotFoundException('La page n\'existe pas ');
        }

        return $this->render('template/detailbien.html.twig', array(
            'detailbien' => $detailbien
        ));
    }
}