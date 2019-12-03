<?php

namespace app\src;

class FuelTotalUpper
{

    public function calculateMasses(array $masses)
    {
        $totalFuel = 0;

        foreach ($masses as $mass) {
            $totalFuel += $this->calculateMassV1($mass);
        }

        return $totalFuel;
    }

    public function calculateMassesV2(array $masses)
    {
        $totalFuel = 0;

        foreach ($masses as $mass) {
            $totalFuel += $this->calculateMassV2($mass);
        }

        return $totalFuel;
    }

    public function calculateMassV2(int $mass): int
    {
        $fuel = $this->calculateMassV1($mass);

        if ($fuel <= 0) {
            return 0;
        }

        return $fuel + $this->calculateMassV2($fuel);
    }

    public function calculateMassV1(int $mass): int
    {
        return (floor($mass / 3) - 2);
    }
}
