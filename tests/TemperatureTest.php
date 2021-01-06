<?php

namespace Proform\TestPackege\Tests;

use Proform\TestPackege\Temperature;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        // $this->assertTrue(true);
        $fahrenheit = Temperature::forCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);
    }
}
