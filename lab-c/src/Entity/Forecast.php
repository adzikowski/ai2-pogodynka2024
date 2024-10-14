<?php

namespace App\Entity;

use App\Repository\ForecastRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ForecastRepository::class)]
class Forecast
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $timeOfOccurrence = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $temperatureCelcius = null;

    #[ORM\ManyToOne(inversedBy: 'forecasts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTimeOfOccurrence(): ?\DateTimeInterface
    {
        return $this->timeOfOccurrence;
    }

    public function setTimeOfOccurrence(\DateTimeInterface $timeOfOccurrence): static
    {
        $this->timeOfOccurrence = $timeOfOccurrence;

        return $this;
    }

    public function getTemperatureCelcius(): ?string
    {
        return $this->temperatureCelcius;
    }

    public function setTemperatureCelcius(string $temperatureCelcius): static
    {
        $this->temperatureCelcius = $temperatureCelcius;

        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): static
    {
        $this->location = $location;

        return $this;
    }
}
