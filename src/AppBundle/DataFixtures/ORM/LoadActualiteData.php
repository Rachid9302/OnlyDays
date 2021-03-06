<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Actualite;

class LoadActualiteData  extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $actualite = new Actualite();
        $actualite->setAuteur($this->getReference("admin-user"));
        $actualite->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite->setFirstimage("uploads/01.jpg");
        $actualite->setDateevenement(new \DateTime('2017-07-01'));

        $actualite1 = new Actualite();
        $actualite1->setAuteur($this->getReference("admin-user"));
        $actualite1->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite1->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite1->setFirstimage("uploads/02.jpg");
        $actualite1->setDateevenement(new \DateTime('2017-07-01'));

        $actualite2 = new Actualite();
        $actualite2->setAuteur($this->getReference("admin-user"));
        $actualite2->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite2->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite2->setFirstimage("uploads/03.jpg");
        $actualite2->setDateevenement(new \DateTime('2017-07-01'));

        $actualite3 = new Actualite();
        $actualite3->setAuteur($this->getReference("admin-user"));
        $actualite3->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite3->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite3->setFirstimage("uploads/04.jpg");
        $actualite3->setDateevenement(new \DateTime('2017-07-01'));

        $actualite4 = new Actualite();
        $actualite4->setAuteur($this->getReference("admin-user"));
        $actualite4->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite4->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite4->setFirstimage("uploads/01.jpg");
        $actualite4->setDateevenement(new \DateTime('2017-07-01'));

        $actualite5 = new Actualite();
        $actualite5->setAuteur($this->getReference("admin-user"));
        $actualite5->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite5->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite5->setFirstimage("uploads/02.jpg");
        $actualite5->setDateevenement(new \DateTime('2017-07-01'));

        $actualite6 = new Actualite();
        $actualite6->setAuteur($this->getReference("admin-user"));
        $actualite6->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite6->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite6->setFirstimage("uploads/03.jpg");
        $actualite6->setDateevenement(new \DateTime('2017-07-01'));

        $actualite7 = new Actualite();
        $actualite7->setAuteur($this->getReference("admin-user"));
        $actualite7->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite7->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite7->setFirstimage("uploads/04.jpg");
        $actualite7->setDateevenement(new \DateTime('2017-07-01'));

        $actualite8 = new Actualite();
        $actualite8->setAuteur($this->getReference("admin-user"));
        $actualite8->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite8->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite8->setFirstimage("uploads/01.jpg");
        $actualite8->setDateevenement(new \DateTime('2017-07-01'));

        $actualite9 = new Actualite();
        $actualite9->setAuteur($this->getReference("admin-user"));
        $actualite9->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite9->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite9->setFirstimage("uploads/02.jpg");
        $actualite9->setDateevenement(new \DateTime('2017-07-01'));

        $actualite10 = new Actualite();
        $actualite10->setAuteur($this->getReference("admin-user"));
        $actualite10->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite10->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite10->setFirstimage("uploads/03.jpg");
        $actualite10->setDateevenement(new \DateTime('2017-07-01'));

        $actualite11 = new Actualite();
        $actualite11->setAuteur($this->getReference("admin-user"));
        $actualite11->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite11->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite11->setFirstimage("uploads/04.jpg");
        $actualite11->setDateevenement(new \DateTime('2017-07-01'));







        $manager->persist($actualite);
        $manager->persist($actualite1);
        $manager->persist($actualite2);
        $manager->persist($actualite3);
        $manager->persist($actualite4);
        $manager->persist($actualite5);
        $manager->persist($actualite6);
        $manager->persist($actualite7);
        $manager->persist($actualite8);
        $manager->persist($actualite9);
        $manager->persist($actualite10);
        $manager->persist($actualite11);


        $this->addReference('actualite', $actualite);
        $this->addReference('actualite1', $actualite1);
        $this->addReference('actualite2', $actualite2);
        $this->addReference('actualite3', $actualite3);
        $this->addReference('actualite4', $actualite4);
        $this->addReference('actualite5', $actualite5);
        $this->addReference('actualite6', $actualite6);
        $this->addReference('actualite7', $actualite7);
        $this->addReference('actualite8', $actualite8);
        $this->addReference('actualite9', $actualite9);
        $this->addReference('actualite10', $actualite10);
        $this->addReference('actualite11', $actualite11);


        $manager->flush();


    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}