<?php

declare(strict_types=1);

namespace App\Services;

class ValidationService
{
    private $requiredData = [
        'area',
        'numberRooms',
        'numberBathrooms',
    ];

    public function checkRequiredData(array $data): bool
    {
        $result = true;
        foreach ($this->requiredData as $item) {
            if (array_key_exists($item, $data) === false) $result = false;
        }

        return $result;
    }

    public function checkRequiredReportId(array $data): bool
    {
        $result = true;

        if (empty($data['fileName'])) $result = false;
        if (empty($data['email'])) $result = false;
        if (empty($data['mainTypeCost'])) $result = false;
        if (empty($data['mainTypeDays'])) $result = false;
        if (empty($data['mainTypePercent'])) $result = false;

        return $result;
    }

    public function dataSaveCalc(array $data): bool
    {
        $result = true;
        try {
            if (empty($data['email'])) {
                throw new \Exception();
            }
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                throw new \Exception();
            }
            if (empty($data['values'])) {
                throw new \Exception();
            }
            if (count($data['values']) !== 19) {
                throw new \Exception();
            }
        } catch (\Exception $e) {
            $result = false;
        }

        return $result;
    }
}