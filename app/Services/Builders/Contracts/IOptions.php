<?php

declare(strict_types=1);

namespace App\Services\Builders\Contracts;

interface IOptions
{
    function getOptions(): array;
}