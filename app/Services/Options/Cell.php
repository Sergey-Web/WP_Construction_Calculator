<?php

declare(strict_type=1);

namespace App\Services\Options;

abstract class Cell
{
    const CELL_RESULT = 'G';

    const CHECKBOX = 'A';

    const CELL_TYPE = 'F';

    const CELL_MAIN_ACTIVE = 'M';

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

    public function getNameCellMainActive(): string
    {
        return static::CELL_MAIN_ACTIVE . static::ROW;
    }
}