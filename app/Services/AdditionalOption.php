<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Options\AdditionalOptions\
{
    EntranceDoor,
    HomeCinema,
    SmartHouse,
    WaterTreatmentSystem,
    Landscaping,
    BioFireplace,
    DrinkingWaterSystem,
    HygienicShower,
    ElectricUnderfloorHeatingKitchen,
    SoundproofingFloor,
    Boiler,
    Phytowall,
    DryingMachine,
    AntiFlooding,
    Curtains,
    CurtainsTulle,
    SoundproofingCeiling,
    ElectricUnderfloorHeatingBathrooms,
    MattressesBed,
    SupplyExhaustVentilation,
    FoodWasteDisposer,
    SoundproofingWalls
};

class AdditionalOption implements IOption
{
    private $options = [
        'soundproofingCeiling' => SoundproofingCeiling::class,
        'soundproofingWalls' => SoundproofingWalls::class,
        'soundproofingFloor' => SoundproofingFloor::class,
        'entranceDoor' => EntranceDoor::class,
        'electricUnderfloorHeatingBathrooms' => ElectricUnderfloorHeatingBathrooms::class,
        'electricUnderfloorHeatingKitchen' => ElectricUnderfloorHeatingKitchen::class,
        'supplyExhaustVentilation' => SupplyExhaustVentilation::class,
        'smartHouse' => SmartHouse::class,
        'waterTreatmentSystem' => WaterTreatmentSystem::class,
        'drinkingWaterSystem' => DrinkingWaterSystem::class,
        'antiFlooding' => AntiFlooding::class,
        'hygienicShower' => HygienicShower::class,
        'boiler' => Boiler::class,
        'foodWasteDisposer' => FoodWasteDisposer::class,
        'dryingMachine' => DryingMachine::class,
        'homeCinema' => HomeCinema::class,
        'bioFireplace' => BioFireplace::class,
        'curtainsTulle' => CurtainsTulle::class,
        'curtains' => Curtains::class,
        'mattressesBed' => MattressesBed::class,
        'landscaping' => Landscaping::class,
        'phytowall' => Phytowall::class,
    ];

    private $data;

    private $optionReceived;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->optionReceived = $this->setOptionReceived();
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getOptionsReceived(): array
    {
        return $this->optionReceived;
    }

    private function setOptionReceived(): array
    {
        $data = [];
        foreach ($this->data as $key => $item) {
            if ((int) $item > 0) $data[$key] = $key;
        }
        return array_intersect_key($this->options, $data);
    }

    public function getTypes(): array
    {
        $result = [];
        foreach ($this->getOptionsReceived() as $key => $item) {
            $result[$key] = $this->data[$key];
        }
        return $result;
    }
}