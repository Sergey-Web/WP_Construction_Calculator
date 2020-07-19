<?php

declare(strict_types=1);

namespace App\Services\Options\HouseParams;

class Room implements IMainValues
{
    const COLUMN = 'C';
    const ROW = 5;
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