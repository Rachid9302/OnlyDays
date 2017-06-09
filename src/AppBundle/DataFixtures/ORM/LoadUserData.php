<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Utilisateur;

class LoadUserData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new Utilisateur();
        $userAdmin->setUsername('admin');
        $userAdmin->setPlainPassword('mdp');
        $userAdmin->setEmail('only.weeks.immo@gmail.com');
        $userAdmin->setNom('Sciences-u');
        $userAdmin->setPrenom('Gones');
        $userAdmin->setCivilite(0);
        $userAdmin->setAdresse(" 53 Cours Albert Thomas");
        $userAdmin->setVille('Lyon');
        $userAdmin->setCodepostale('69003');
        $userAdmin->setPays('France');
        $userAdmin->setTelephone('0652365484');
        $userAdmin->setEnabled(true);
        $userAdmin->addRole("ROLE_ADMIN");
        $userAdmin->setDatedenaissance(new \DateTime('2017-01-01'));

        $user = new Utilisateur();
        $user->setUsername('rachid');
        $user->setPlainPassword('mdp');
        $user->setEmail('rachid.elamirchi@gmail.com');
        $user->setNom('El amirchi');
        $user->setPrenom('Rachid');
        $user->setCivilite(0);
        $user->setAdresse("8 rue de l'épargne");
        $user->setVille('Lyon');
        $user->setCodepostale('69008');
        $user->setPays('France');
        $user->setTelephone('0652365485');
        $user->setEnabled(true);
        $user->addRole("ROLE_USER");
        $user->setDatedenaissance(new \DateTime('1993-01-11'));

        $user1 = new Utilisateur();
        $user1->setUsername('Erwan');
        $user1->setPlainPassword('mdp');
        $user1->setEmail('erwan.hevin@gmail.com');
        $user1->setNom('Hevin');
        $user1->setPrenom('Erwan');
        $user1->setCivilite(0);
        $user1->setAdresse("8 rue de a pompe");
        $user1->setVille('Lyon');
        $user1->setCodepostale('69003');
        $user1->setPays('France');
        $user1->setTelephone('0652365486');
        $user1->setEnabled(true);
        $user1->addRole("ROLE_USER");
        $user1->setDatedenaissance(new \DateTime('1995-01-01'));

        $user2 = new Utilisateur();
        $user2->setUsername('Rafael');
        $user2->setPlainPassword('mdp');
        $user2->setEmail('rafaelmuller.pro@gmail.com');
        $user2->setNom('Muller');
        $user2->setPrenom('Rafael');
        $user2->setCivilite(0);
        $user2->setAdresse("8 rue de la fayette");
        $user2->setVille('Lyon');
        $user2->setCodepostale('69003');
        $user2->setPays('France');
        $user2->setTelephone('0652365487');
        $user2->setEnabled(true);
        $user2->addRole("ROLE_USER");
        $user2->setDatedenaissance(new \DateTime('1995-01-01'));

        $user3 = new Utilisateur();
        $user3->setUsername('Romain');
        $user3->setPlainPassword('mdp');
        $user3->setEmail('romain.charignon@gmail.com');
        $user3->setNom('Charignon');
        $user3->setPrenom('Romain');
        $user3->setCivilite(0);
        $user3->setAdresse("8 rue Herno");
        $user3->setVille('Lyon');
        $user3->setCodepostale('69003');
        $user3->setPays('France');
        $user3->setTelephone('0652365488');
        $user3->setEnabled(true);
        $user3->addRole("ROLE_USER");
        $user3->setDatedenaissance(new \DateTime('1995-01-01'));

        $manager->persist($userAdmin);
        $manager->persist($user);
        $manager->persist($user1);
        $manager->persist($user2);
        $manager->persist($user3);
        $manager->flush();

        $this->addReference('admin-user', $userAdmin);
        $this->addReference('user', $user);
        $this->addReference('user1', $user1);
        $this->addReference('user2', $user2);
        $this->addReference('user3', $user3);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}