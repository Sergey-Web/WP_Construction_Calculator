<?php

declare(strict_type=1);

namespace App\Services\Options;

abstract class Cell
{
    const CELL_RESULT = 'G';

    const CHECKBOX = 'A';

    const CELL_TYPE = 'F';

    abstract function getNameCellResult(): string;


    abstract function getNameCellType(): string;


    abstract function getNameCellCheckBox(): string;
}