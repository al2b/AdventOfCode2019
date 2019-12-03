<?php

namespace app\src;

class FuelTotalUpper
{

    public function calculateMasses(array $masses)
    {
        $totalFuel = 0;

        foreach ($masses as $mass) {
            $totalFuel += $this->calculateMass($mass);
        }

        return $totalFuel;
    }

    public function calculateMass(int $mass): int
    {
        return (floor($mass / 3) - 2);
    }
}
