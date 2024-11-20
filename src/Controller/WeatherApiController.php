<?php

namespace App\Controller;

use App\Entity\Forecast;
use App\Service\WeatherUtil;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;

class WeatherApiController extends AbstractController
{
    #[Route('/api/v1/weather/', name: 'app_weather_api', methods: ['GET'])]
    public function index(
        #[MapQueryParameter] string       $city,
        #[MapQueryParameter] string       $country,
        #[MapQueryParameter] string       $format,
        WeatherUtil                       $util,
        #[MapQueryParameter('twig')] bool $twig = false,
    ): JsonResponse|response
    {
        $measurements = $util->getWeatherForCountryAndCity($country, $city);
        if ($format === 'json') {
            if ($twig) {
                return $this->render('weather_api/index.json.twig', [
                    'city' => $city,
                    'country' => $country,
                    'measurements' => $measurements,
                ]);
            }
            return $this->json([
                'city' => $city,
                'country' => $country,
                'measurements' => array_map(fn(Forecast $m) => [
                    'date' => $m->getTimeOfOccurrence()->format('Y-m-d'),
                    'celsius' => $m->getTemperatureC(),
                    'fahrenheit' => $m->getFahrenheit(),
                ], $measurements),
            ]);
        } elseif ($format === 'csv') {
            if ($twig) {
                return $this->render('weather_api/index.csv.twig', [
                    'city' => $city,
                    'country' => $country,
                    'measurements' => $measurements,
                ]);
            }
            $csvData = "city,country,date,celsius,fahrenheit\n";
            foreach ($measurements as $measurement) {
                $csvData .= sprintf(
                    "%s,%s,%s,%s,%s\n",
                    $measurement->getLocation()->getCity(),
                    $measurement->getLocation()->getCountry(),
                    $measurement->getTimeOfOccurrence()->format('Y-m-d'),
                    $measurement->getTemperatureC(),
                    $measurement->getFahrenheit(),
                );
            }
            $response = new Response($csvData);
            $response->headers->set('Content-Type', 'text/plain');
            $response->headers->set('Content-Disposition', 'inline; filename="weather.csv');

            return $response;
        }
        return $this->json(['Your request is not valid']);
    }
}
