<?php
/**
 * Created by PhpStorm.
 * User: waled
 * Date: 11/29/16
 * Time: 6:18 PM
 */

namespace AppBundle\DataFixtures\ORM;
use AppBundle\Entity\Salon;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadSalonData implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $salon1 = new Salon();
        $salon1->setName('salon1');
        $salon1->setAdress('Adress 1');
        $salon2 = new Salon();
        $salon2->setName('salon');
        $salon2->setAdress('Adress 2');
        $manager->persist($salon1);
        $manager->persist($salon2);

        $manager->flush();
    }
}