<?php

declare(strict_types=1);

namespace App\Services;

class DateTimeService
{
    public static function getMonthDate(int $numWorkDays): array
    {
        $days = $numWorkDays;

        for ($mounts = 0; $days >= 30; $mounts++) {
            $days -= 30;
        }

        return ['months' => $mounts, 'days' => $days];
    }

    public static function getTotalWorkTime(array $days, array $shiftDaysParallelJobs): int
    {
        $maxDays = 0;

        foreach ($days as $key => $val) {
            $sumDay = $val + $shiftDaysParallelJobs[$key];
            if ($sumDay > $maxDays) {
                $maxDays = (int) $sumDay;
            }
        }

        return $maxDays;
    }

    public static function daysOffsetFromParallelJobs(
        array $days,
        array $percentageParallelJobs,
        array $keysMainType
    ): array
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