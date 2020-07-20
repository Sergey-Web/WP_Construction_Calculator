<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Options\MainTypes\
{
    Appliances,
    CeilingDecoration,
    CleaningAfterBuilders,
    Conditioning,
    EngineeringNetworkProject,
    ExhaustVentilation,
    FloorDecoration,
    Furniture,
    Heating,
    LightingElectricalAccessories,
    Partitions,
    Plumbing,
    InteriorDoors,
    Screed,
    WallDecoration,
    WaterSupplySewerage
};

class MainType implements IOption
{
    private $options = [
        'engineeringNetworkProject' => EngineeringNetworkProject::class,
        'waterSupplySewerage' => WaterSupplySewerage::class,
        'heating' => Heating::class,
        'screed' => Screed::class,
        'partitions' => Partitions::class,
        'wallDecoration' => WallDecoration::class,
        'ceilingDecoration' => CeilingDecoration::class,
        'floorDecoration' => FloorDecoration::class,
        'exhaustVentilation' => ExhaustVentilation::class,
        'conditioning' => Conditioning::class,
        'plumbing' => Plumbing::class,
        'interiorDoors' => InteriorDoors::class,
        'lightingElectricalAccessories' => LightingElectricalAccessories::class,
        'furniture' => Furniture::class,
        'appliances' => Appliances::class,
        'cleaningAfterBuilders' => CleaningAfterBuilders::class,
    ];

    private $data;

    private $optionReceived;
    /**
     * @var array
     */
    private $optionActive;

    public function __construct(array $data)
    {
        $this->data = $data;
        $this->setOptionReceived();
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getActiveOptions(): array
    {
        return $this->optionActive;
    }

    public function getOptionsReceived(): array
    {
        return $this->optionReceived;
    }

    public function getTypes(): array
    {
        $result = [];
        foreach ($this->getOptionsReceived() as $key => $item) {
            $result[$key] = $this->data[$key];
        }

        return $result;
    }

    private function setOptionReceived(): void
    {
        $data = [];
        foreach ($this->data as $key => $item) {
            if (array_key_exists($key, $this->options) === false) continue;
            if ((int) $item > 0) $data[$key] = $key;
        }

        $this->optionReceived = array_merge($this->options, $data);
        $this->optionActive = array_intersect_key($this->options, $data);
    }
}