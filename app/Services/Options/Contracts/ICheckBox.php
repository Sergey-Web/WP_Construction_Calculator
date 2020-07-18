<?php

declare(strict_types=1);

namespace App\Services\Options\Contracts;

interface ICheckBox
{
    const CHECKBOX = 'A';
    function getNameCellCheckBox(): string;
}