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
        $actualite->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite->setFirstimage("uploads/01.jpg");

        $actualite1 = new Actualite();
        $actualite1->setAuteur($this->getReference("admin-user"));
        $actualite1->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite1->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite1->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite1->setFirstimage("uploads/02.jpg");

        $actualite2 = new Actualite();
        $actualite2->setAuteur($this->getReference("admin-user"));
        $actualite2->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite2->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite2->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite2->setFirstimage("uploads/03.jpg");

        $actualite3 = new Actualite();
        $actualite3->setAuteur($this->getReference("admin-user"));
        $actualite3->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite3->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite3->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite3->setFirstimage("uploads/04.jpg");

        $actualite4 = new Actualite();
        $actualite4->setAuteur($this->getReference("admin-user"));
        $actualite4->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite4->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite4->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite4->setFirstimage("uploads/01.jpg");

        $actualite5 = new Actualite();
        $actualite5->setAuteur($this->getReference("admin-user"));
        $actualite5->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite5->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite5->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite5->setFirstimage("uploads/02.jpg");

        $actualite6 = new Actualite();
        $actualite6->setAuteur($this->getReference("admin-user"));
        $actualite6->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite6->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite6->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite6->setFirstimage("uploads/03.jpg");

        $actualite7 = new Actualite();
        $actualite7->setAuteur($this->getReference("admin-user"));
        $actualite7->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite7->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite7->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite7->setFirstimage("uploads/04.jpg");

        $actualite8 = new Actualite();
        $actualite8->setAuteur($this->getReference("admin-user"));
        $actualite8->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite8->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite8->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite8->setFirstimage("uploads/01.jpg");

        $actualite9 = new Actualite();
        $actualite9->setAuteur($this->getReference("admin-user"));
        $actualite9->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite9->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite9->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite9->setFirstimage("uploads/02.jpg");

        $actualite10 = new Actualite();
        $actualite10->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite10->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite10->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite10->setFirstimage("uploads/03.jpg");

        $actualite11 = new Actualite();
        $actualite11->setAuteur($this->getReference("admin-user"));
        $actualite11->setTitre("Lorem ipsum dolor sit amet consectetur adipiscing elit.");
        $actualite11->setPredescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor");
        $actualite11->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $actualite11->setFirstimage("uploads/04.jpg");







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





        $manager->flush();


    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}