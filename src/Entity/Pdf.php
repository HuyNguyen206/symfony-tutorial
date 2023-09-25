<?php

namespace App\Entity;

use App\Repository\PdfRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PdfRepository::class)]
#[ORM\Table(name: 'pdfs')]
class Pdf extends File
{
    #[ORM\Column(nullable: true)]
    private ?int $pages_number = null;

    #[ORM\Column(length: 255)]
    private ?string $orientation = null;


    public function getPagesNumber(): ?int
    {
        return $this->pages_number;
    }

    public function setPagesNumber(?int $pages_number): static
    {
        $this->pages_number = $pages_number;

        return $this;
    }

    public function getOrientation(): ?string
    {
        return $this->orientation;
    }

    public function setOrientation(string $orientation): static
    {
        $this->orientation = $orientation;

        return $this;
    }
}
