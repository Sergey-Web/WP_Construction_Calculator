<?php

declare(strict_types=1);

namespace App\Services\Builders;

use App\Services\{IMainData, IOption};
use App\Services\Builders\Contracts\{ITypes,IOptions,IOptionsReceived,IMain};

interface IBuilder extends ITypes, IOptions, IOptionsReceived, IMain
{
    function __construct(IMainData $data, IOption $options);
}