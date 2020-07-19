<?php

declare(strict_types=1);

namespace App\Services\Builders;

use App\Services\{IMainData, IOption};

class Builder implements IBuilder
{
    private $options;
    private $optionsReceived;
    private $mainData;
    private $types;

    public function __construct(IMainData $data, IOption $mainType, IOption $additionalOption)
    {
        $this->optionsReceived = $mainType->getOptionsReceived();
        $this->options = $mainType->getOptions();
        $this->mainData = $data->getMainData();
        $this->types = $mainType->getTypes();
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getOptionsReceived(): array
    {
        return $this->optionsReceived;
    }

    public function getMainData(): array
    {
        return $this->mainData;
    }

    public function getTypes(): array
    {
        return $this->types;
    }
}