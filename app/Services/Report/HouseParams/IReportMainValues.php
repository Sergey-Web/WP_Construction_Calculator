<?php

declare(strict_types=1);

namespace App\Services\Report\HouseParams;

interface IReportMainValues
{
    function getNameCell(): string;
    function getValue(): string;
}