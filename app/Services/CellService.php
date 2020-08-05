<?php

declare(strict_types=1);

namespace App\Services;

use Exception;

class CellService
{
    public static function sumCells(array $data): int
    {
        $sum = 0;

        foreach ($data as $i) {
            if (!empty($i[0]) && $i[0] > 0) {
                $sum += NumericService::getNum($i[0]);
            }
        }

        return $sum;
    }


    public static function getDataActiveOptions(array $data, array $activeOptions, array $options): array
    {
        if (count($data) !== count($options)) throw new Exception('The amount of data does not match');

        $res = [];

        foreach ($data as $key => $i) {
            $res[$options[$key]] = $i;
        }

        return array_intersect_key($res, $activeOptions);
    }

}