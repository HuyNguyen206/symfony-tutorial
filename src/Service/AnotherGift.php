<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class AnotherGift
{
    private $age = 31;
    public array $another = ['1', 'test'];

    public function __construct(LoggerInterface $logger)
    {
        $logger->info('another gift log');

        shuffle($this->another);
    }

    public function gETANOTHER()
    {
        return 'get another';
    }


}