<?php

namespace app\test;

use app\src\FuelEstimator;
use PHPUnit\Framework\TestCase;

class FuelEstimatorTest extends TestCase
{
    public function testCompute(): void
    {
        $calculator = new FuelEstimator();

        $this->assertEquals(2, $calculator->calculate(12));
    }
}
