<?php

namespace App\Tests\Entity;

use App\Entity\Forecast;
use PHPUnit\Framework\TestCase;

class ForecastTest extends TestCase
{
    public function dataGetFahrenheit(): array{
        return [
            ['0', 32],
            ['-100', -148],
            ['100', 212],
            ['33.5',92.3],
            ['120', 248],
            ['-240', -400],
            ['150', 302],
            ['666', 1230.8],
            ['123', 253.4],
            ['25.5', 77.9],
        ];
    }
    /**
     * @dataProvider dataGetFahrenheit
     */
    public function testGetFahrenheit($celsius, $expectedFahrenheit): void
    {

        $forecast = new Forecast();

        $result = $forecast->setTemperatureC($celsius);
        $this->assertEquals($expectedFahrenheit, $result->getFahrenheit(),
            "$celsius c should be equal to $expectedFahrenheit f");

    }
}
