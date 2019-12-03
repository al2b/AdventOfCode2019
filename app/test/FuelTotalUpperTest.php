<?php

namespace app\test;

use app\src\FuelTotalUpper;
use PHPUnit\Framework\TestCase;

class FuelTotalUpperTest extends TestCase
{
    public function testCalculateTotalMassesV1(): void
    {
        $masses = include("app/data/fuel.php");

        $calculator = new FuelTotalUpper();

        $this->assertEquals(3448043, $calculator->calculateMasses($masses));
    }

    public function testCalculateTotalMassesV2(): void
    {
        $masses = include("app/data/fuel-part2.php");

        $calculator = new FuelTotalUpper();

        $this->assertEquals(5169198, $calculator->calculateMassesV2($masses));
    }

    public function testCalculateSingleMass(): void
    {
        $calculator = new FuelTotalUpper();

        $this->assertEquals(2, $calculator->calculateMassV1(12));
        $this->assertEquals(2, $calculator->calculateMassV1(14));
        $this->assertEquals(654, $calculator->calculateMassV1(1969));
        $this->assertEquals(33583, $calculator->calculateMassV1(100756));
    }

    public function testCalculateMassV2(): void
    {
        $calculator = new FuelTotalUpper();

        $this->assertEquals(2, $calculator->calculateMassV2(12));
        $this->assertEquals(2, $calculator->calculateMassV2(14));
        $this->assertEquals(966, $calculator->calculateMassV2(1969));
        $this->assertEquals(50346, $calculator->calculateMassV2(100756));
    }
}
