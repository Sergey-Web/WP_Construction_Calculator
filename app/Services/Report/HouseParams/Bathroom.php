<?php

declare(strict_types=1);

namespace App\Services\Report\HouseParams;

class Bathroom implements IReportMainValues
{
    const COLUMN = 'E';
    const ROW = 11;
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getNameCell(): string
    {
        return static::COLUMN . static::ROW;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}