<?php

declare(strict_types=1);

namespace App\Services\Options\AdditionalOptions;

use App\Services\Options\Cell;

class Phytowall extends Cell
{
    public const ROW = 31;

    public function getNameCellCheckBox(): string
    {
        return static::CHECKBOX . static::ROW;
    }

    public function getNameCellType(): string
    {
        return static::CELL_TYPE . static::ROW;
    }

    public function getNameCellResult(): string
    {
        return static::CELL_RESULT . static::ROW;
    }
}