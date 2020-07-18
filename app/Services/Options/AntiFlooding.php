<?php

declare(strict_types=1);

namespace App\Services\Options;

use App\Services\Options\Contracts\ICellResult;
use App\Services\Options\Contracts\ICellType;
use App\Services\Options\Contracts\ICheckBox;

class AntiFlooding implements ICheckBox, ICellType, ICellResult
{
    public const ROW = 12;

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