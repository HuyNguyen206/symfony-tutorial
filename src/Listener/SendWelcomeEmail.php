<?php

namespace App\Listener;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Doctrine\ORM\Event\PostFlushEventArgs;
use Doctrine\ORM\Event\PostPersistEventArgs;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\ORM\Events;
use Psr\Log\LoggerInterface;

#[AsEntityListener(event: Events::prePersist, method: 'postFlush', entity: User::class)]
class SendWelcomeEmail
{
    public function __construct(public LoggerInterface $logger)
    {
    }

    public function postFlush(User $user, PrePersistEventArgs  $args)
    {
        $this->logger->info('test prePersist');
//        dd($user, $args);
    }
}