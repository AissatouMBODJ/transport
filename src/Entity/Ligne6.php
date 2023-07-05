<?php

namespace App\Entity;

use App\Repository\Ligne6Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Ligne6Repository::class)]
class Ligne6
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Trajet = null;

    #[ORM\Column(length: 15)]
    private ?string $Tarif = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $Disposition = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTrajet(): ?string
    {
        return $this->Trajet;
    }

    public function setTrajet(string $Trajet): self
    {
        $this->Trajet = $Trajet;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->Tarif;
    }

    public function setTarif(string $Tarif): self
    {
        $this->Tarif = $Tarif;

        return $this;
    }

    public function getDisposition(): ?\DateTimeInterface
    {
        return $this->Disposition;
    }

    public function setDisposition(\DateTimeInterface $Disposition): self
    {
        $this->Disposition = $Disposition;

        return $this;
    }
}
