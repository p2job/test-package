<?php

namespace Proform\TestPackege\Tests;

use Proform\TestPackege\TestPackege;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        // $this->assertTrue(true);
        $lbs = TestPackege::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
