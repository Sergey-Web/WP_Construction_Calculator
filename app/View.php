<?php

declare(strict_types=1);

namespace App;

class View implements IView
{
    /**
     * @var string
     */
    private $path;

    public function __construct()
    {
        $this->path = __DIR__ .DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR;
    }

    public function render(string $template, array $params = [])
    {
        require_once $this->path . $template . '.php';
    }
}