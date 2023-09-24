<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class Detail
{
    public array $random = ['detail', 'detail 2', 'detail 3'];
    public function __construct(LoggerInterface $logger, public AnotherGift $gift)
    {
        $logger->info('here detail');

        shuffle($this->random);
    }

    public function get()
    {
        return $this->random;
    }

    function set() {

    }
}