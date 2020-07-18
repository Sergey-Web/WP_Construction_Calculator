<?php

declare(strict_types=1);

namespace App\Services\MainData\Contracts;

interface IMainValues
{
    const COLUMN = 'C';
    function getNameCell(): string;
    function getValue(): string;
}