<?php

declare(strict_types=1);

namespace App\Services\MainData;

use App\Services\MainData\Contracts\IMainValues;

class Bathroom implements IMainValues
{
    public const ROW = 6;
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