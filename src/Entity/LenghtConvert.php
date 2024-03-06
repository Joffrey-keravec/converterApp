<?php

namespace App\Entity;

use App\Repository\LenghtConvertRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\FormTypeInterface;

#[ORM\Entity(repositoryClass: LenghtConvertRepository::class)]
class LenghtConvert
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $Centimetre = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $pouce_inch = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $metre = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $pieds = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCentimetre(): ?string
    {
        return $this->Centimetre;
    }

    public function setCentimetre(?string $Centimetre): static
    {
        $this->Centimetre = $Centimetre;

        return $this;
    }

    public function getPouceInch(): ?string
    {
        return $this->pouce_inch;
    }

    public function setPouceInch(?string $pouce_inch): static
    {
        $this->pouce_inch = $pouce_inch;

        return $this;
    }

    public function getMetre(): ?string
    {
        return $this->metre;
    }

    public function setMetre(?string $metre): static
    {
        $this->metre = $metre;

        return $this;
    }

    public function getPieds(): ?string
    {
        return $this->pieds;
    }

    public function setPieds(?string $pieds): static
    {
        $this->pieds = $pieds;

        return $this;
    }
}
