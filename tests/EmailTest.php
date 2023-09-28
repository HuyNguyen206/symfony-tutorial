<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EmailTest extends WebTestCase
{
    private $router;
    private $client;

    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->client = static::createClient();
        $this->router = $this->client->getContainer()->get('router');
    }

    public function testSomething(): void
    {
//        $client = static::createClient();
//        $this->router = $client->getContainer()->get('router');
//        $client = static::createClient();
        $crawler =  $this->client->request('GET', $this->router->generate('home', ['name' => 'ben']));

        $this->assertResponseIsSuccessful();
//        $this->assertSelectorTextContains('h1', 'Hello World');
    }
}
