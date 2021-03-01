<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Options\HouseParams\{Area, Room, Bathroom, Inhabitant};

class HouseCalc implements IMainData
{
    public $listMainData = [
        'area' => Area::class,
        'numberRooms' => Room::class,
        'numberBathrooms' => Bathroom::class,
        'numberInhabitants' => Inhabitant::class,
    ];

    private $data;

    public function __construct(array $data)
    {
        $this->setData($data);
    }

    public function getData(): array
    {
        return $this->data;
    }

    private function setData(array $data): void
    {
        $mainData = [];
        foreach($this->listMainData as $key => $item) {
            if (array_key_exists($key, $data) !== false) {
                $mainData[] = new $item($data[$key]);
            }
        }
        $this->data = $mainData;
    }
}