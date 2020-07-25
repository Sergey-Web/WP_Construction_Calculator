<?php

declare(strict_types=1);

namespace App\Services;

class DateTimeService {
    public static function getMonthDate(int $d): array
    {
        for ($m = 0; $d > 30; $d -= 30, $m++) {}

        return ['months' => $m, 'days' => $d];
    }
}