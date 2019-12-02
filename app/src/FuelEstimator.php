<?php

namespace app\src;

class FuelEstimator
{
    public function calculate(int $mass): int
    {
        return (floor($mass / 3) - 2);
    }
}
