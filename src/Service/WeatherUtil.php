<?php
declare(strict_types=1);

namespace App\Service;

use App\Entity\Location;
use App\Entity\Forecast;
use App\Repository\ForecastRepository;

class WeatherUtil
{
    private ForecastRepository $forecastRepository;

    public function __construct(ForecastRepository $forecastRepository)
    {
        $this->forecastRepository = $forecastRepository;
    }
    public function getWeatherForLocation(Location $location): array
    {
        return $this->forecastRepository->findByLocation($location);
    }

    public function getWeatherForCountryAndCity(string $city, string $country ): array
    {
        $locationEntity = $this->forecastRepository->findOneBy([
            'city' => $city,
            'country' => $country,
        ]);
        return $this->getWeatherForLocation($locationEntity);
    }
}
