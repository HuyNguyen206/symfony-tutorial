<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class VideoSubscriber implements EventSubscriberInterface
{
    public function onVideoCreatedEvent($event): void
    {
        dump($event->video);
    }

    public function onKernelResponse1($event): void
    {
        dump(1);
    }

    public function onKernelResponse2($event): void
    {
        dump(2);
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'video.created.event' => 'onVideoCreatedEvent',
            KernelEvents::RESPONSE => [
                ['onKernelResponse1', 2],
                ['onKernelResponse2', 1],
            ],
        ];
    }
}
