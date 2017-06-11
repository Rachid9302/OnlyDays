<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Commentaire;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Annonce;
use Symfony\Component\Validator\Constraints\DateTime;

class LoadCommentaireData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $com = new Commentaire();
        $com->setAnnonce($this->getReference("ann"));
        $com->setAuteur($this->getReference("admin-user"));
        $com->setDatecreation(new \DateTime("2017-05-01"));
        $com->setNote(5);
        $com->setTexteCommentaire("Ceci est un commentaire de test1");

        $com0 = new Commentaire();
        $com0->setAnnonce($this->getReference("ann1"));
        $com0->setAuteur($this->getReference("admin-user"));
        $com0->setDatecreation(new \DateTime("2017-05-10"));
        $com0->setNote(3);
        $com0->setTexteCommentaire("Ceci est un 2eme commentaire de test");

        $com1 = new Commentaire();
        $com1->setAnnonce($this->getReference("ann2"));
        $com1->setAuteur($this->getReference("admin-user"));
        $com1->setDatecreation(new \DateTime("2017-05-01"));
        $com1->setNote(5);
        $com1->setTexteCommentaire("Ceci est un commentaire de test2");

        $com2 = new Commentaire();
        $com2->setAnnonce($this->getReference("ann3"));
        $com2->setAuteur($this->getReference("admin-user"));
        $com2->setDatecreation(new \DateTime("2017-05-01"));
        $com2->setNote(5);
        $com2->setTexteCommentaire("Ceci est un commentaire de test3");

        $com3 = new Commentaire();
        $com3->setAnnonce($this->getReference("ann4"));
        $com3->setAuteur($this->getReference("admin-user"));
        $com3->setDatecreation(new \DateTime("2017-05-01"));
        $com3->setNote(5);
        $com3->setTexteCommentaire("Ceci est un commentaire de test4");

        $manager->persist($com);
        $manager->persist($com0);
        $manager->persist($com1);
        $manager->persist($com2);
        $manager->persist($com3);

        $manager->flush();

    }
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 3;
    }
}