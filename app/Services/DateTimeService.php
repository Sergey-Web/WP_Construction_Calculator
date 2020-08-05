<?php

declare(strict_types=1);

namespace App\Services;

class DateTimeService
{
    public static function getMonthDate(float $d): array
    {
        for ($m = 0; $d > 30; $d -= 30, $m++) {}

        return ['months' => $m, 'days' => $d];
    }

    public static function daysOffsetFromParallelJobs(array $days, array $percentageParallelJobs): float
    {
        $daysOffset = 0;

        foreach ($days as $k => $v) {
            if ($v[0] !== "0") {
                $daysOffset += $v[0] - ($v[0] * (((int) $percentageParallelJobs[$k][0]) / 100));
            }
        }

        return $daysOffset;
    }
}