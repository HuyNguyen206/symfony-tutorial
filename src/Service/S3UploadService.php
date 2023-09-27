<?php

namespace App\Service;

use App\Service\Interface\UploadInterface;

class S3UploadService implements Interface\UploadInterface
{
    public function __construct()
    {
        dump('hello from S3UploadService');
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