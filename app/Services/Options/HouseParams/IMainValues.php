<?php

declare(strict_types=1);

namespace App\Services\Options\HouseParams;

interface IMainValues
{
    function getNameCell(): string;
    function getValue(): string;
}