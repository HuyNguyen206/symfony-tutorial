<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Contracts\Service\Attribute\Required;

class Gift
{
    public $optionService, $logger, $my;
    public array $gifts = ['pc', 'vga', 'laptop'];
    public function __construct(LoggerInterface $logger, public Detail $detail, string $paramService, string $adminEmail)
    {
        $logger->info('gift were random');

        shuffle($this->gifts);
    }

    #[Required]
    public function getSecondService(SecondService $secondService)
    {
        $this->optionService = $secondService;
    }

}