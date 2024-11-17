<?php

namespace App\Command;

use App\Service\WeatherUtil;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'weather:city:country',
    description: 'Returns weather for given location',
)]
class WeatherCityCountryCommand extends Command
{
    private WeatherUtil $weatherUtil;

    public function __construct(WeatherUtil $weatherUtil)
    {
        parent::__construct();
        $this->weatherUtil = $weatherUtil;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('city', InputArgument::REQUIRED, 'name of city')
            ->addArgument('country', InputArgument::REQUIRED, '2 letter shortcut country')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $city = $input->getArgument('city');
        $country = $input->getArgument('country');

        $measurements = $this->weatherUtil->getWeatherForCountryAndCity($country, $city);
        if (empty($measurements)) {
            $io->error("There is no weather data for selected location");
            return Command::FAILURE;
        }
        $io->writeln(sprintf('Weather in: %s %s', $city, $country));
        foreach ($measurements as $measurement) {
            $io->writeln(sprintf("\t%s: %s",
                $measurement->getTimeOfOccurrence()->format('Y-m-d'),
                $measurement->getTemperatureC()
            ));
        }
        return Command::SUCCESS;
    }
}
