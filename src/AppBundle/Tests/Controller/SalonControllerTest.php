<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SalonControllerTest extends WebTestCase
{
    public function testGetsalons()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getSalons');
    }

}
