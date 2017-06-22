<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 22/06/2017
 * Time: 21:54
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\CommentaireNews;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Actualite;
use Symfony\Component\Validator\Constraints\DateTime;

class LoadCommentaireNewsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $com = new CommentaireNews();
        $com->setActualite($this->getReference("actualite"));
        $com->setAuteur($this->getReference("admin-user"));
        $com->setDatecreation(new \DateTime("2017-05-01"));
        $com->setNote(5);
        $com->setTexteCommentaire("Ceci est un commentaire de test1");

        $com0 = new CommentaireNews();
        $com0->setActualite($this->getReference("actualite1"));
        $com0->setAuteur($this->getReference("admin-user"));
        $com0->setDatecreation(new \DateTime("2017-05-10"));
        $com0->setNote(3);
        $com0->setTexteCommentaire("Ceci est un 2eme commentaire de test");

        $com1 = new CommentaireNews();
        $com1->setActualite($this->getReference("actualite2"));
        $com1->setAuteur($this->getReference("admin-user"));
        $com1->setDatecreation(new \DateTime("2017-05-01"));
        $com1->setNote(5);
        $com1->setTexteCommentaire("Ceci est un commentaire de test2");

        $com2 = new CommentaireNews();
        $com2->setActualite($this->getReference("actualite3"));
        $com2->setAuteur($this->getReference("admin-user"));
        $com2->setDatecreation(new \DateTime("2017-05-01"));
        $com2->setNote(5);
        $com2->setTexteCommentaire("Ceci est un commentaire de test3");

        $com3 = new CommentaireNews();
        $com3->setActualite($this->getReference("actualite4"));
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
        return 4;
    }
}