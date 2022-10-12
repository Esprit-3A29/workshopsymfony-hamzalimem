<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $CreationDate = null;

    #[ORM\Column(length: 255)]
    private ?string $CreationDat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreationDate(): ?string
    {
        return $this->CreationDate;
    }

    public function setCreationDate(string $CreationDate): self
    {
        $this->CreationDate = $CreationDate;

        return $this;
    }

    public function getCreationDat(): ?string
    {
        return $this->CreationDat;
    }

    public function setCreationDat(string $CreationDat): self
    {
        $this->CreationDat = $CreationDat;

        return $this;
    }
}
