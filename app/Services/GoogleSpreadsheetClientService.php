<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Options\HouseParams\IMainValues;
use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_BatchUpdateValuesRequest;
use Google_Service_Sheets_ValueRange;

class GoogleSpreadsheetClientService
{
    /**
     * @var Google_Service_Sheets
     */
    private $service;

    public function __construct()
    {
        $client = new Google_Client();
        $client->setApplicationName('Google Sheets');
        $client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
        $client->setAuthConfig(__DIR__ . '/../../credentials.json');
        $client->setAccessType('offline');
        $this->service = new Google_Service_Sheets($client);
    }

    public function updateValueCells(string $spreadsheetId, string $range, array $values): void
    {
        $body = new Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);
        $params = ['valueInputOption' => 'USER_ENTERED'];

        $this->service->spreadsheets_values->update(
            $spreadsheetId,
            $range,
            $body,
            $params
        );
    }

    public function updateButchValueCells(string $spreadsheetId, array $data): void
    {
        $body = new Google_Service_Sheets_BatchUpdateValuesRequest([
            'valueInputOption' => 'USER_ENTERED',
            'data' => $data
        ]);

        $this->service->spreadsheets_values->batchUpdate($spreadsheetId, $body);
    }

    public function getValueCells(string $spreadsheet, string $range): array
    {
        try {
            $response = $this->service->spreadsheets_values->get($spreadsheet, $range);
            $result = $response->getValues();
        } catch (\Exception $e) {
            throw new \Exception();
        }
        return $result;
    }


    public function updateMainParams(string $spreadsheetId, IMainData $data, string $range): void
    {
        $houseParams = [];
        foreach ($data->getData() as $key => $item) {
            /** @var $item IMainValues */
            $houseParams[] = [(int)$item->getValue()];
        }

        $this->updateValueCells(
            $spreadsheetId,
            $range,
            $houseParams
        );
    }

    public function updateCheckBoxRequireOptions(string $spreadsheetId, IOption $option, string $range): void
    {
        $valuesMainTypes = [];
        foreach ($option->getTypes() as $key => $item) {
            $valuesMainTypes[] = [true];
        }

        $this->updateValueCells(
            $spreadsheetId,
            $range,
            $valuesMainTypes
        );
    }

    public function updateCheckBoxOptions(string $spreadsheetId, IOption $option, string $range): void
    {
        $valuesMainTypes = [];
        foreach ($option->getTypes() as $key => $item) {
            $valuesMainTypes[] = [(int) $item > 0];
        }

        $this->updateValueCells(
            $spreadsheetId,
            $range,
            $valuesMainTypes
        );
    }

    public function addBatchOptions(IOption $option): array
    {
        $data = $option->getActiveOptions();

        $dataButchUpdate = [];

        foreach ($data as $key => $item) {
            $dataButchUpdate[] = [
                'range' => $_ENV['CALC_TAB_NAME'] . (new $item)->getNameCellType(),
                'values' => [[(int)$data[$key]]]
            ];
        }

        return $dataButchUpdate;
    }
}