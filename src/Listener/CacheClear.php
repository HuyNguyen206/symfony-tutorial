<?php

namespace App\Listener;

use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

class CacheClear
{
    public function clear(string $cacheDirectory): void
    {
//        dd('ben');
        // clear your cache
    }

}