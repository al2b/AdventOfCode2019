<?php

namespace app\test;

use app\src\FuelTotalUpper;
use PHPUnit\Framework\TestCase;

class FuelTotalUpperTest extends TestCase
{
    public function testCalculateTotalMasses(): void
    {
        $masses = include("app/data/fuel.php");

        $calculator = new FuelTotalUpper();

        $this->assertEquals(3448043, $calculator->calculateMasses($masses));
    }

    public function testCalculateSingleMass(): void
    {
        $calculator = new FuelTotalUpper();

        $this->assertEquals(2, $calculator->calculateMass(12));
        $this->assertEquals(2, $calculator->calculateMass(14));
        $this->assertEquals(654, $calculator->calculateMass(1969));
        $this->assertEquals(33583, $calculator->calculateMass(100756));
    }
}
