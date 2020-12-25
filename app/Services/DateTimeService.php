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

    public static function sumDaysOffsetFromParallelJobs(array $days, array $shiftDaysParallelJobs): int
    {
        $maxDays = 0;

        foreach ($days as $key => $val) {
            var_dump($val, $shiftDaysParallelJobs[$key]);die;
            $sumDay = $val + $shiftDaysParallelJobs[$key];
            if ($sumDay > $maxDays) {
                $maxDays = (int) $sumDay;
            }
        }

        return $maxDays;
    }

    public static function daysOffsetFromParallelJobs(array $days, array $percentageParallelJobs, $keysMainType): array
    {
        $daysOffset = 0;
        $res = [$keysMainType[$daysOffset] => 0];

        array_pop($days);
        array_shift($percentageParallelJobs);

        foreach ($days as $k => $v) {
            $daysOffset += $v[0] * (((int) $percentageParallelJobs[$k][0]) / 100);
            $res[$keysMainType[$k+1]] = round($daysOffset);
        }

        return $res;
    }
}