<?php

namespace App\Entity;

use App\Repository\ResultRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResultRepository::class)]
class Result
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $ca = null;

    #[ORM\Column(nullable: true)]
    private ?int $margin = null;

    #[ORM\Column(nullable: true)]
    private ?int $ebitda = null;

    #[ORM\Column(nullable: true)]
    private ?int $loss = null;

    #[ORM\Column(nullable: true)]
    private ?int $year = null;

    #[ORM\ManyToOne(inversedBy: 'results')]
    private ?Companie $companie = null;

    #[ORM\Column(nullable: true)]
    private ?int $idAPI = null;

    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCa(): ?int
    {
        return $this->ca;
    }

    public function setCa(?int $ca): static
    {
        $this->ca = $ca;

        return $this;
    }

    public function getMargin(): ?int
    {
        return $this->margin;
    }

    public function setMargin(?int $margin): static
    {
        $this->margin = $margin;

        return $this;
    }

    public function getEbitda(): ?int
    {
        return $this->ebitda;
    }

    public function setEbitda(?int $ebitda): static
    {
        $this->ebitda = $ebitda;

        return $this;
    }

    public function getLoss(): ?int
    {
        return $this->loss;
    }

    public function setLoss(?int $loss): static
    {
        $this->loss = $loss;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getCompanie(): ?Companie
    {
        return $this->companie;
    }

    public function setCompanie(?Companie $companie): static
    {
        $this->companie = $companie;

        return $this;
    }

    public function getIdAPI(): ?int
    {
        return $this->idAPI;
    }

    public function setIdAPI(?int $idAPI): static
    {
        $this->idAPI = $idAPI;

        return $this;
    }
}
