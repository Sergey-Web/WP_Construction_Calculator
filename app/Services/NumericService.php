<?php

declare(strict_types=1);

namespace App\Services;

class NumericService
{
    public static function costSeparator(int $cost, string $separator): string
    {
        return preg_replace('/(?<=\d)(?=(\d{3})+$)/', $separator, $cost);
    }
}
