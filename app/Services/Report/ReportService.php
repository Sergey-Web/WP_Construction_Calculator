<?php

declare(strict_types=1);

namespace App\Services\Report;

use App\Services\GoogleDriveClientService;
use App\Services\GoogleSpreadsheetClientService;
use App\Services\HouseCalc;
use DateTime;

class ReportService
{
    public const PATH_DIR_UPLOADS = __DIR__.'/../../../../../../wp-content/uploads/';
    /**
     * @var GoogleSpreadsheetClientService
     */
    private $googleClientSpreadsheetService;
    /**
     * @var GoogleDriveClientService
     */
    private $googleDriveClientService;

    public function __construct()
    {
        $this->googleClientSpreadsheetService = new GoogleSpreadsheetClientService();
        $this->googleDriveClientService = new GoogleDriveClientService();
    }

    public function save(array $data): void
    {
        $reportSpreadsheetId = $this->copySpreadsheet($_ENV['REPORT_SPREADSHEET_ID']);

        $house = new HouseCalc($data['house']);
        $this->googleClientSpreadsheetService->updateMainParams(
            $reportSpreadsheetId,
            $house,
            $_ENV['REPORT_CONDITIONS']
        );

        $this->saveResult(
            $reportSpreadsheetId,
            $_ENV['REPORT_MAIN_COST_RANGE'],
            array_values($data['mainTypeCost'])
        );

        $this->saveResult(
            $reportSpreadsheetId,
            $_ENV['REPORT_ADDITIONAL_COST_RANGE'],
            array_values($data['additionalTypeCost'])
        );

        $date = array_values($data['totalDays']);

        $this->saveResult(
            $reportSpreadsheetId,
            $_ENV['REPORT_TOTAL_DAYS'],
            [$date[0] . ' месяцев и ' . $date[1] . ' дней']
        );

        $fileName = $this->createFilePdf($reportSpreadsheetId, $data['fileName'], $data['email']);
        $pdfId = $this->uploadFile($fileName);
        $this->shareFile($pdfId, $data['email']);
        unlink(static::PATH_DIR_UPLOADS . $fileName);
    }

    private function uploadFile(string $fileName): string
    {
        return $this->googleDriveClientService->uploadFile($fileName, static::PATH_DIR_UPLOADS);
    }
    private function createFilePdf(string $reportSpreadsheetId, string $name, string $email): string
    {
        $fileName = $email .'__'. $name.'pdf';
        $content = $this->googleDriveClientService->exportFile($reportSpreadsheetId);
        file_put_contents(static::PATH_DIR_UPLOADS . $fileName, $content->getBody()->getContents());

        return $fileName;
    }

    private function shareFile(string $fileId, string $email): void
    {
        (new GoogleDriveClientService())->share($fileId, $email);
    }

    private function saveResult(string $spreadsheetId, string $range, array $result): void
    {
        $values = [];
        foreach($result as $item) {
            $values[] = [$item];
        }
        (new GoogleSpreadsheetClientService())
            ->updateValueCells($spreadsheetId, $range, $values);
    }

    private function getResult(string $spreadsheetId, string $range): array
    {
        return $this->googleClientSpreadsheetService
            ->getValueCells($spreadsheetId, $range);
    }

    private function copySpreadsheet(string $spreadsheetId): string
    {
        return $this->googleDriveClientService
            ->copyFile(
                $spreadsheetId,
                (new DateTime)->format('Y-m-d_h_i_s')
            )
            ->id;
    }
}