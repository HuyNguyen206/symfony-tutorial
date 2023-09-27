<?php

namespace App\Listener;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

#[AsEventListener(event: 'kernel.response')]
class KernelResponseCustomListener
{
    public function onKernelResponse(ResponseEvent $event)
    {
        $response = $event->getResponse();
//        $newRes = new Response('this is custom res');
//        $event->setResponse($newRes);
    }
}