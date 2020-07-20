<?php

declare(strict_types=1);

namespace App\Services\Options\MainTypes;

use App\Services\Options\Cell;

class InteriorDoors extends Cell
{
    public const ROW = 45;

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