<?php

declare(strict_types=1);

namespace App\Services\Options\Contracts;

interface ICellType
{
    const CELL_TYPE = 'F';
    function getNameCellType(): string;
}