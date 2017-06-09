<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Commentaire;
use AppBundle\Entity\Annonce;
use Symfony\Component\Validator\Constraints\DateTime;

class LoadAnnonceData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $ann = new Annonce();
        $ann->setReference(54854001);
        $ann->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann->setSuperficie(67);
        $ann->setPiece(3);
        $ann->setChambre(1);
        $ann->setLit(1);
        $ann->setCuisine(1);
        $ann->setVoyageurmax(3);
        $ann->setWifi(1);
        $ann->setPrixnuit(24);
        $ann->setDateDepot(new \DateTime('2017-07-01'));
        $ann->setFirstimage("uploads/B40A0853.jpg");
        $ann->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann->setTypepropriete(1);
        $ann->setArrondissement(3);
        $ann->setAuteur($this->getReference("admin-user"));

        $ann1 = new Annonce();
        $ann1->setReference(54854002);
        $ann1->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann1->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann1->setSuperficie(67);
        $ann1->setPiece(3);
        $ann1->setChambre(1);
        $ann1->setLit(1);
        $ann1->setCuisine(1);
        $ann1->setVoyageurmax(3);
        $ann1->setWifi(1);
        $ann1->setPrixnuit(24);
        $ann1->setDateDepot(new \DateTime('2017-07-01'));
        $ann1->setFirstimage("uploads/B35A1081.jpg");
        $ann1->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann1->setTypepropriete(1);
        $ann1->setArrondissement(3);
        $ann1->setAuteur($this->getReference("admin-user"));

        $ann2 = new Annonce();
        $ann2->setReference(54854003);
        $ann2->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann2->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann2->setSuperficie(67);
        $ann2->setPiece(3);
        $ann2->setChambre(1);
        $ann2->setLit(1);
        $ann2->setCuisine(1);
        $ann2->setVoyageurmax(3);
        $ann2->setWifi(1);
        $ann2->setPrixnuit(24);
        $ann2->setDateDepot(new \DateTime('2017-07-01'));
        $ann2->setFirstimage("uploads/B34A1022.jpg");
        $ann2->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann2->setTypepropriete(1);
        $ann2->setArrondissement(3);
        $ann2->setAuteur($this->getReference("admin-user"));

        $ann3 = new Annonce();
        $ann3->setReference(54854004);
        $ann3->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann3->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann3->setSuperficie(67);
        $ann3->setPiece(3);
        $ann3->setChambre(1);
        $ann3->setLit(1);
        $ann3->setCuisine(1);
        $ann3->setVoyageurmax(3);
        $ann3->setWifi(1);
        $ann3->setPrixnuit(24);
        $ann3->setDateDepot(new \DateTime('2017-07-01'));
        $ann3->setFirstimage("uploads/B39A0058.jpg");
        $ann3->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann3->setTypepropriete(1);
        $ann3->setArrondissement(3);
        $ann3->setAuteur($this->getReference("admin-user"));

        $ann4 = new Annonce();
        $ann4->setReference(54854005);
        $ann4->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann4->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann4->setSuperficie(67);
        $ann4->setPiece(3);
        $ann4->setChambre(1);
        $ann4->setLit(1);
        $ann4->setCuisine(1);
        $ann4->setVoyageurmax(3);
        $ann4->setWifi(1);
        $ann4->setPrixnuit(24);
        $ann4->setDateDepot(new \DateTime('2017-07-01'));
        $ann4->setFirstimage("uploads/B20A1207.jpg");
        $ann4->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann4->setTypepropriete(1);
        $ann4->setArrondissement(3);
        $ann4->setAuteur($this->getReference("admin-user"));

        $ann5 = new Annonce();
        $ann5->setReference(54854006);
        $ann5->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann5->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann5->setSuperficie(67);
        $ann5->setPiece(3);
        $ann5->setChambre(1);
        $ann5->setLit(1);
        $ann5->setCuisine(1);
        $ann5->setVoyageurmax(3);
        $ann5->setWifi(1);
        $ann5->setPrixnuit(24);
        $ann5->setDateDepot(new \DateTime('2017-07-01'));
        $ann5->setFirstimage("uploads/759A120.jpg");
        $ann5->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann5->setTypepropriete(1);
        $ann5->setArrondissement(3);
        $ann5->setAuteur($this->getReference("admin-user"));

        $ann6 = new Annonce();
        $ann6->setReference(54854007);
        $ann6->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann6->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann6->setSuperficie(67);
        $ann6->setPiece(3);
        $ann6->setChambre(1);
        $ann6->setLit(1);
        $ann6->setCuisine(1);
        $ann6->setVoyageurmax(3);
        $ann6->setWifi(1);
        $ann6->setPrixnuit(24);
        $ann6->setDateDepot(new \DateTime('2017-07-01'));
        $ann6->setFirstimage("uploads/B41A0460.jpg");
        $ann6->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann6->setTypepropriete(1);
        $ann6->setArrondissement(3);
        $ann6->setAuteur($this->getReference("admin-user"));

        $ann7 = new Annonce();
        $ann7->setReference(54854008);
        $ann7->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann7->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann7->setSuperficie(67);
        $ann7->setPiece(3);
        $ann7->setChambre(1);
        $ann7->setLit(1);
        $ann7->setCuisine(1);
        $ann7->setVoyageurmax(3);
        $ann7->setWifi(1);
        $ann7->setPrixnuit(24);
        $ann7->setDateDepot(new \DateTime('2017-07-01'));
        $ann7->setFirstimage("uploads/B40E0140.jpg");
        $ann7->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann7->setTypepropriete(1);
        $ann7->setArrondissement(3);
        $ann7->setAuteur($this->getReference("admin-user"));

        $ann8 = new Annonce();
        $ann8->setReference(54854009);
        $ann8->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann8->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann8->setSuperficie(67);
        $ann8->setPiece(3);
        $ann8->setChambre(1);
        $ann8->setLit(1);
        $ann8->setCuisine(1);
        $ann8->setVoyageurmax(3);
        $ann8->setWifi(1);
        $ann8->setPrixnuit(24);
        $ann8->setDateDepot(new \DateTime('2017-07-01'));
        $ann8->setFirstimage("uploads/B28A1392.jpg");
        $ann8->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann8->setTypepropriete(1);
        $ann8->setArrondissement(3);
        $ann8->setAuteur($this->getReference("admin-user"));

        $ann9 = new Annonce();
        $ann9->setReference(54854010);
        $ann9->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann9->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann9->setSuperficie(67);
        $ann9->setPiece(3);
        $ann9->setChambre(1);
        $ann9->setLit(1);
        $ann9->setCuisine(1);
        $ann9->setVoyageurmax(3);
        $ann9->setWifi(1);
        $ann9->setPrixnuit(24);
        $ann9->setDateDepot(new \DateTime('2017-07-01'));
        $ann9->setFirstimage("uploads/759A120.jpg");
        $ann9->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann9->setTypepropriete(1);
        $ann9->setArrondissement(3);
        $ann9->setAuteur($this->getReference("admin-user"));

        $ann10 = new Annonce();
        $ann10->setReference(54854011);
        $ann10->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann10->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann10->setSuperficie(67);
        $ann10->setPiece(3);
        $ann10->setChambre(1);
        $ann10->setLit(1);
        $ann10->setCuisine(1);
        $ann10->setVoyageurmax(3);
        $ann10->setWifi(1);
        $ann10->setPrixnuit(24);
        $ann10->setDateDepot(new \DateTime('2017-07-01'));
        $ann10->setFirstimage("uploads/B41A0460.jpg");
        $ann10->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann10->setTypepropriete(1);
        $ann10->setArrondissement(3);
        $ann10->setAuteur($this->getReference("admin-user"));

        $ann11 = new Annonce();
        $ann11->setReference(54854012);
        $ann11->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann11->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann11->setSuperficie(67);
        $ann11->setPiece(3);
        $ann11->setChambre(1);
        $ann11->setLit(1);
        $ann11->setCuisine(1);
        $ann11->setVoyageurmax(3);
        $ann11->setWifi(1);
        $ann11->setPrixnuit(24);
        $ann11->setDateDepot(new \DateTime('2017-07-01'));
        $ann11->setFirstimage("uploads/B40E0140.jpg");
        $ann11->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann11->setTypepropriete(1);
        $ann11->setArrondissement(3);
        $ann11->setAuteur($this->getReference("admin-user"));

        $ann12 = new Annonce();
        $ann12->setReference(54854013);
        $ann12->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann12->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann12->setSuperficie(67);
        $ann12->setPiece(3);
        $ann12->setChambre(1);
        $ann12->setLit(1);
        $ann12->setCuisine(1);
        $ann12->setVoyageurmax(3);
        $ann12->setWifi(1);
        $ann12->setPrixnuit(24);
        $ann12->setDateDepot(new \DateTime('2017-07-01'));
        $ann12->setFirstimage("uploads/B28A1392.jpg");
        $ann12->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann12->setTypepropriete(1);
        $ann12->setArrondissement(3);
        $ann12->setAuteur($this->getReference("admin-user"));

        $ann13 = new Annonce();
        $ann13->setReference(54854014);
        $ann13->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann13->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann13->setSuperficie(67);
        $ann13->setPiece(3);
        $ann13->setChambre(1);
        $ann13->setLit(1);
        $ann13->setCuisine(1);
        $ann13->setVoyageurmax(3);
        $ann13->setWifi(1);
        $ann13->setPrixnuit(24);
        $ann13->setDateDepot(new \DateTime('2017-07-01'));
        $ann13->setFirstimage("uploads/B33A0387.jpg");
        $ann13->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann13->setTypepropriete(1);
        $ann13->setArrondissement(3);
        $ann13->setAuteur($this->getReference("admin-user"));

        $ann14 = new Annonce();
        $ann14->setReference(54854015);
        $ann14->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann14->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann14->setSuperficie(67);
        $ann14->setPiece(3);
        $ann14->setChambre(1);
        $ann14->setLit(1);
        $ann14->setCuisine(1);
        $ann14->setVoyageurmax(3);
        $ann14->setWifi(1);
        $ann14->setPrixnuit(24);
        $ann14->setDateDepot(new \DateTime('2017-07-01'));
        $ann14->setFirstimage("uploads/B33A1375.jpg");
        $ann14->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann14->setTypepropriete(1);
        $ann14->setArrondissement(3);
        $ann14->setAuteur($this->getReference("admin-user"));

        $ann15 = new Annonce();
        $ann15->setReference(54854016);
        $ann15->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann15->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann15->setSuperficie(67);
        $ann15->setPiece(3);
        $ann15->setChambre(1);
        $ann15->setLit(1);
        $ann15->setCuisine(1);
        $ann15->setVoyageurmax(3);
        $ann15->setWifi(1);
        $ann15->setPrixnuit(24);
        $ann15->setDateDepot(new \DateTime('2017-07-01'));
        $ann15->setFirstimage("uploads/B37A0826.jpg");
        $ann15->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann15->setTypepropriete(1);
        $ann15->setArrondissement(3);
        $ann15->setAuteur($this->getReference("admin-user"));

        $ann16 = new Annonce();
        $ann16->setReference(54854017);
        $ann16->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann16->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann16->setSuperficie(67);
        $ann16->setPiece(3);
        $ann16->setChambre(1);
        $ann16->setLit(1);
        $ann16->setCuisine(1);
        $ann16->setVoyageurmax(3);
        $ann16->setWifi(1);
        $ann16->setPrixnuit(24);
        $ann16->setDateDepot(new \DateTime('2017-07-01'));
        $ann16->setFirstimage("uploads/B37A0905.jpg");
        $ann16->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann16->setTypepropriete(1);
        $ann16->setArrondissement(3);
        $ann16->setAuteur($this->getReference("admin-user"));

        $ann17 = new Annonce();
        $ann17->setReference(54854018);
        $ann17->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann17->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann17->setSuperficie(67);
        $ann17->setPiece(3);
        $ann17->setChambre(1);
        $ann17->setLit(1);
        $ann17->setCuisine(1);
        $ann17->setVoyageurmax(3);
        $ann17->setWifi(1);
        $ann17->setPrixnuit(24);
        $ann17->setDateDepot(new \DateTime('2017-07-01'));
        $ann17->setFirstimage("uploads/B29A0997.jpg");
        $ann17->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann17->setTypepropriete(1);
        $ann17->setArrondissement(3);
        $ann17->setAuteur($this->getReference("user"));

        $ann18 = new Annonce();
        $ann18->setReference(54854019);
        $ann18->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann18->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann18->setSuperficie(67);
        $ann18->setPiece(3);
        $ann18->setChambre(1);
        $ann18->setLit(1);
        $ann18->setCuisine(1);
        $ann18->setVoyageurmax(3);
        $ann18->setWifi(1);
        $ann18->setPrixnuit(24);
        $ann18->setDateDepot(new \DateTime('2017-07-01'));
        $ann18->setFirstimage("uploads/B16A1119.jpg");
        $ann18->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann18->setTypepropriete(1);
        $ann18->setArrondissement(3);
        $ann18->setAuteur($this->getReference("user1"));

        $ann19 = new Annonce();
        $ann19->setReference(54854020);
        $ann19->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann19->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann19->setSuperficie(67);
        $ann19->setPiece(3);
        $ann19->setChambre(1);
        $ann19->setLit(1);
        $ann19->setCuisine(1);
        $ann19->setVoyageurmax(3);
        $ann19->setWifi(1);
        $ann19->setPrixnuit(24);
        $ann19->setDateDepot(new \DateTime('2017-07-01'));
        $ann19->setFirstimage("uploads/B39A1409.jpg");
        $ann19->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann19->setTypepropriete(1);
        $ann19->setArrondissement(3);
        $ann19->setAuteur($this->getReference("user2"));

        $ann20 = new Annonce();
        $ann20->setReference(54854021);
        $ann20->setTitre("appartement 3 pièces 67 m² Lyon 6E");
        $ann20->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $ann20->setSuperficie(67);
        $ann20->setPiece(3);
        $ann20->setChambre(1);
        $ann20->setLit(1);
        $ann20->setCuisine(1);
        $ann20->setVoyageurmax(3);
        $ann20->setWifi(1);
        $ann20->setPrixnuit(24);
        $ann20->setDateDepot(new \DateTime('2017-07-01'));
        $ann20->setFirstimage("uploads/B28A0106.jpg");
        $ann20->setLocalisation("Rue cuvier, Lyon 6E, France");
        $ann20->setTypepropriete(1);
        $ann20->setArrondissement(3);
        $ann20->setAuteur($this->getReference("user3"));



        $manager->persist($ann);
        $manager->persist($ann1);
        $manager->persist($ann2);
        $manager->persist($ann3);
        $manager->persist($ann4);
        $manager->persist($ann5);
        $manager->persist($ann6);
        $manager->persist($ann7);
        $manager->persist($ann8);
        $manager->persist($ann9);
        $manager->persist($ann10);
        $manager->persist($ann11);
        $manager->persist($ann12);
        $manager->persist($ann13);
        $manager->persist($ann14);
        $manager->persist($ann15);
        $manager->persist($ann16);
        $manager->persist($ann17);
        $manager->persist($ann18);
        $manager->persist($ann19);
        $manager->persist($ann20);

        $this->addReference('ann', $ann);
        $this->addReference('ann1', $ann1);
        $this->addReference('ann2', $ann2);
        $this->addReference('ann3', $ann3);
        $this->addReference('ann4', $ann4);
        $this->addReference('ann5', $ann5);
        $this->addReference('ann6', $ann6);
        $this->addReference('ann7', $ann7);
        $this->addReference('ann8', $ann8);
        $this->addReference('ann9', $ann9);
        $this->addReference('ann10', $ann10);
        $this->addReference('ann11', $ann11);
        $this->addReference('ann12', $ann12);
        $this->addReference('ann13', $ann13);
        $this->addReference('ann14', $ann14);
        $this->addReference('ann15', $ann15);
        $this->addReference('ann16', $ann16);
        $this->addReference('ann17', $ann17);
        $this->addReference('ann19', $ann18);
        $this->addReference('ann20', $ann20);







    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}