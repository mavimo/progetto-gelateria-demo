<?php

namespace GelateriaBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontofficeControllerTest extends WebTestCase
{
    public function testHomepage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testGelateria()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/gelateria');
    }

}
