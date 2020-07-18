<?php

declare(strict_types=1);

namespace App;


interface IView
{
    function render(string $template, array $params);
}