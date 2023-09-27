<?php

namespace App\Event;

use App\Entity\Video;
use Symfony\Contracts\EventDispatcher\Event;

class VideoCreatedEvent extends Event
{
    public function __construct(public Video $video)
    {

    }
}