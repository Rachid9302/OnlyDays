<?php

namespace AppBundle\Repository;

/**
 * AnnonceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnnonceRepository extends \Doctrine\ORM\EntityRepository
{
    public function rechercherAnnonces($search) {
        $qb = $this->createQueryBuilder('a')
                ->where('1=1');



        if($search['type']!= null ) {
            $qb ->andWhere('a.typepropriete = :type')
                ->setParameter('type', $search['type']);
        }
        if($search['prix']!= null ) {
            $qb ->andWhere('a.prixnuit >= :prix')
                ->setParameter('prix', $search['prix']);
        }

        if($search['date_debut']!= null ){

            $qb ->andWhere('a.dateDepot >= :dateDebut')
                ->setParameter('dateDebut', $search['date_debut']);
        }


        if($search['date_fin']!= null ){

            $qb ->andWhere('a.dateDepot <= :dateFin')
                ->setParameter('dateFin', $search['date_fin']);
        }


        $query = $qb->getQuery();
        $results = $query->getResult();

        return $results;
    }

    public function rechercherAnnoncesAvances($search1) {
        $qb = $this->createQueryBuilder('a')
                ->where('1=1');
            if($search1['type']!= null ) {
                $qb ->andWhere('a.typepropriete = :type')
                    ->setParameter('type', $search1['type']);
            }
            if($search1['date_debut']!= null ) {
                $qb ->andWhere('a.dateDepot >= :dateDebut')
                    ->setParameter('dateDebut', $search1['date_debut']);
            }
            if($search1['date_fin']!= null ) {
                $qb ->andWhere('a.dateDepot <= :dateFin')
                    ->setParameter('dateFin', $search1['date_fin']);
            }
            if($search1['arrondissement']!= null ){
                $qb ->andWhere('a.arrondissement = :arrondissements')
                    ->setParameter('arrondissements', $search1['arrondissement']);
            }
            if($search1['prix_min']!= null ){
                $qb ->andWhere('a.prixnuit >= :prixMin')
                    ->setParameter('prixMin', $search1['prix_min']);
            }
            if($search1['prix_max']!= null ){
                $qb ->andWhere('a.prixnuit <= :prixMax')
                    ->setParameter('prixMax', $search1['prix_max']);
            }
            if($search1['surface_min']!= null ){
                $qb ->andWhere('a.superficie >= :surfaceMin')
                    ->setParameter('surfaceMin', $search1['surface_min']);
            }
            if($search1['surface_max']!= null ){
                $qb ->andWhere('a.superficie <= :surfaceMax')
                    ->setParameter('surfaceMax', $search1['surface_max']);
            }
            if($search1['piece_min']!= null ){
                $qb ->andWhere('a.piece >= :pieceMin')
                    ->setParameter('pieceMin', $search1['piece_min']);
            }
            if($search1['piece_max']!= null ){
                $qb ->andWhere('a.piece <= :pieceMax')
                    ->setParameter('pieceMax', $search1['piece_max']);
            }
            if($search1['chambre_min']!= null ){
                $qb ->andWhere('a.chambre >= :chambreMin')
                    ->setParameter('chambreMin', $search1['chambre_min']);
            }
            if($search1['chambre_max']!= null ){
                $qb ->andWhere('a.chambre <= :chambreMax')
                    ->setParameter('chambreMax', $search1['chambre_max']);
            }



        $query = $qb->getQuery();
        $results = $query->getResult();

        return $results;
    }
}
