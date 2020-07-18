<?php

declare(strict_types=1);

namespace App\Services\Options\Contracts;

interface ICellResult
{
    const CELL_RESULT = 'G';
    function getNameCellResult(): string;
}