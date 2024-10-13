<?php

namespace App\Controller;

use App\Entity\Location;
use App\Repository\ForecastRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WeatherController extends AbstractController
{
    #[Route('/weather/{city}', name: 'app_weather')]
    public function city(Location $location, ForecastRepository $repository): Response
    {
        $forecasts = $repository->findByLocation($location);
        return $this->render('weather/city.html.twig', [
            'location' => $location,
            'forecasts' => $forecasts,
        ]);
    }

    #[Route('/weather/{city}/{country}', name: 'app_weather_citycountry')]
    public function cityCountry(Location $location, ForecastRepository $repository, string $country): Response
    {
        $forecasts = $repository->findByLocationAndCountry($location, $country);
        dump($forecasts);
        return $this->render('weather/city.html.twig', [
            'location' => $location,
            'forecasts' => $forecasts,
        ]);
    }
}
