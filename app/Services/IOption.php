<?php

declare(strict_types=1);

namespace App\Services;

interface IOption
{
    function getOptions(): array;
    function getActiveOptions(): array;
    function getOptionsReceived(): array;
    function getTypes(): array;
}