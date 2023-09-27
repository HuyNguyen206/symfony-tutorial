<?php

namespace App\Service;

use App\Service\Interface\UploadInterface;
use Psr\Log\LoggerInterface;

class LocalUploadService implements Interface\UploadInterface
{

    public function __construct(LoggerInterface $logger)
    {
        $a = 100 + 1;
        $logger->debug($a);
//        dump('hello ben LocalUploadService');
    }

    public function upload()
    {
        // TODO: Implement upload() method.
    }

    public function remove()
    {
        // TODO: Implement remove() method.
    }
}