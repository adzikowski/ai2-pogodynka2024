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

    /**
     * @return Forecast[]
     */
    public function getWeatherForLocation(Location $location): array
    {
        return $this->forecastRepository->findByLocation($location);
    }

    /**
     * @return Forecast[]
     */
    public function getWeatherForCountryAndCity(string $countryCode, string $city): array
    {
        $location = $this->forecastRepository
            ->getEntityManager()
            ->getRepository(Location::class)
            ->findOneBy([
                'city' => $city,
                'country' => $countryCode,
            ]);

        return $location ? $this->getWeatherForLocation($location) : [];
    }
}
