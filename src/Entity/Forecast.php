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

    #[ORM\ManyToOne(inversedBy: 'forecasts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Location $location = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $timeOfOccurrence = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $temperatureC = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTimeOfOccurrence(): ?\DateTimeInterface
    {
        return $this->timeOfOccurrence;
    }

    public function setTimeOfOccurrence(\DateTimeInterface $timeOfOccurrence): static
    {
        $this->timeOfOccurrence = $timeOfOccurrence;

        return $this;
    }

    public function getTemperatureC(): ?string
    {
        return $this->temperatureC;
    }

    public function setTemperatureC(string $temperatureC): static
    {
        $this->temperatureC = $temperatureC;

        return $this;
    }
    public function getFahrenheit(): ?string
    {
        return round($this->temperatureC * 9/5,3) + 32;
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
}
