<?php

declare(strict_types=1);

namespace App\Services\Builders;

use App\Services\{IMainData, IOption};

class Builder implements IBuilder
{
    private $mainTypes;

    private $optionsReceived;

    private $mainData;

    private $types;

    private $additionalOptions;

    public function __construct(IMainData $houseParams, IOption $mainTypes, IOption $additionalOptions)
    {
        $this->optionsReceived = $mainTypes->getOptionsReceived();
        $this->mainTypes = $mainTypes->getOptions();
        $this->additionalOptions = $additionalOptions->getOptions();
        $this->mainData = $houseParams->getMainData();
        $this->types = $mainTypes->getTypes();
    }

    public function getOptions(): array
    {
        return $this->mainTypes;
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