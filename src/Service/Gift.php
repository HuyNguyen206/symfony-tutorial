<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class Gift
{
    public array $gifts = ['pc', 'vga', 'laptop'];
    public function __construct(LoggerInterface $logger, public Detail $detail)
    {
        $logger->info('gift were random');

        shuffle($this->gifts);
    }

    public function Test6()
    {
        dd(31);
    }

}