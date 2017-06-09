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


        if($data == null)
            return $this->redirectToRoute('listebien');

        $search = array(
            'type' => isset($data['type']) ? $data['type'] : null,
            'date_debut' => isset($data['date_debut']) ? $data['date_debut'] : null,
            'date_fin' => isset($data['date_fin']) ? $data['date_fin'] : null,
            'prix' => isset($data['prix']) ? $data['prix'] : null,
        );

       /* if($search['date_debut']== 'error' || $search['date_fin']== 'error'){

            $this->addFlash(
                'notice',
                'Veuillez renseigner les champs dates'
            );
            return;
        }*/


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
            'listbiens' => $result,
            'search' =>  $search
        ));
    }

    /**
     * @Route("/listebienrechercheavance", name="listebien_recherche_avance")
     */
    public function listebienRechercheAvanceAction(Request $request)
    {

        $data = $request->get('rechercheavance');


        $search1 = array(
            'type' => isset($data['type']) ? $data['type'] : null,
            'date_debut' => isset($data['date_debut']) ? $data['date_debut'] : null,
            'date_fin' => isset($data['date_fin']) ? $data['date_fin'] : null,
            'arrondissement' => isset($data['arrondissement']) ? $data['arrondissement'] : null,
            'prix_min' => isset($data['prix_min']) ? $data['prix_min'] : null,
            'prix_max' => isset($data['prix_max']) ? $data['prix_max'] : null,
            'surface_min' => isset($data['surface_min']) ? $data['surface_min'] : null,
            'surface_max' => isset($data['surface_max']) ? $data['surface_max'] : null,
            'piece_min' => isset($data['piece_min']) ? $data['piece_min'] : null,
            'piece_max' => isset($data['piece_max']) ? $data['piece_max'] : null,
            'chambre_min' => isset($data['chambre_min']) ? $data['chambre_min'] : null,
            'chambre_max' => isset($data['chambre_max']) ? $data['chambre_max'] : null,


        );

        // test si chaque elements existent


        $listbiens = $this->getDoctrine()
            ->getRepository('AppBundle:Annonce')
            ->rechercherAnnoncesAvances($search1);


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
            'listbiens' => $result,
            'search1' =>  $search1
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

        $noteAnnonce = $this->getDoctrine()
            ->getRepository('AppBundle:Commentaire')
            ->noteAnnonce($detailbien);

        return $this->render('template/detailbien.html.twig', array(
            'detailbien' => $detailbien,
            'noteAnnonce' => $noteAnnonce

        ));
    }
}