<?php

declare(strict_types=1);

namespace App\Services;

use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_BatchUpdateValuesRequest;
use Google_Service_Sheets_CopySheetToAnotherSpreadsheetRequest;
use Google_Service_Sheets_Spreadsheet;
use Google_Service_Sheets_ValueRange;
use Unirest\Exception;

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
}