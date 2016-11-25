<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testGetusers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/users');
    }

    public function testGetuser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'users/{id}');
    }

}
