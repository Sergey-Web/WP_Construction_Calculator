<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Options\{AntiFlooding,
    Appliances,
    BasicVentilation,
    BioFireplace,
    Boiler,
    CeilingDecoration,
    CleaningAfterBuilders,
    Conditioning,
    Curtains,
    DesignProject,
    DoorReplacement,
    DrinkingWaterSystem,
    EngineeringNetworkProject,
    FloorFinish,
    Furniture,
    Heating,
    InteriorDoors,
    Landscaping,
    LightingElectricalAccessories,
    Partitions,
    Plumbing,
    Screed,
    SmartHouse,
    SpringCleaning,
    SupplyExhaustSystem,
    WallDecoration,
    WarmFloor,
    WaterSupplySewerage,
    WaterTreatmentSystem};

class Option implements IOption
{
    private $options = [
        'smartHouse' => SmartHouse::class,
        'waterTreatmentSystem' => WaterTreatmentSystem::class,
        'drinkingWaterSystem' => DrinkingWaterSystem::class,
        'antiFlooding' => AntiFlooding::class,
        'supplyExhaustSystem' => SupplyExhaustSystem::class,
        'doorReplacement' => DoorReplacement::class,
        'warmFloor' => WarmFloor::class,
        'bioFireplace' => BioFireplace::class,
        'boiler' => Boiler::class,
        'curtains' => Curtains::class,
        'landscaping' => Landscaping::class,
        'designProject' => DesignProject::class,
        'engineeringNetworkProject' => EngineeringNetworkProject::class,
        'waterSupplySewerage' => WaterSupplySewerage::class,
        'heating' => Heating::class,
        'basicVentilation' => BasicVentilation::class,
        'conditioning' => Conditioning::class,
        'screed' => Screed::class,
        'partitions' => Partitions::class,
        'wallDecoration' => WallDecoration::class,
        'ceilingDecoration' => CeilingDecoration::class,
        'floorFinish' => FloorFinish::class,
        'interiorDoors' => InteriorDoors::class,
        'cleaningAfterBuilders' => CleaningAfterBuilders::class,
        'plumbing' => Plumbing::class,
        'lightingElectricalAccessories' => LightingElectricalAccessories::class,
        'furniture' => Furniture::class,
        'appliances' => Appliances::class,
        'springCleaning' => SpringCleaning::class,
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