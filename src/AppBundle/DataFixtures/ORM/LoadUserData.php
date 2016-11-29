<?php

/**
 * Created by PhpStorm.
 * User: waled
 * Date: 11/29/16
 * Time: 6:04 PM
 */
namespace AppBundle\DataFixtures\ORM;
use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData implements  FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setName('Momo');
        $user1->setEmail('email@email.com');
        $user1->setPassword('Momopassword1');

        $user2 = new User();
        $user2->setName('Waled');
        $user2->setEmail('email@email.com');
        $user2->setPassword('Waledpassword1');

        $manager->persist($user1);
        $manager->persist($user2);

        $manager->flush();

    }
}