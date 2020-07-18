<?php

declare(strict_types=1);

namespace App\Services\Report;

use App\Services\GoogleDriveClientService;
use App\Services\GoogleSpreadsheetClientService;

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
        $this->saveResult($reportSpreadsheetId, $_ENV['REPORT_RESULT_COST_RANGE'], array_values($data['resultCost']));
        $this->saveResult($reportSpreadsheetId, $_ENV['REPORT_RESULT_DAYS_RANGE'], array_values($data['resultDays']));
        $this->saveResult($reportSpreadsheetId, $_ENV['REPORT_RESULT_PERCENT_COMPLETION_RANGE'], array_values($data['resultPercent']));
        $fileName = $this->createFilePdf($reportSpreadsheetId, $data['email']);
        $pdfId = $this->uploadFile($fileName);
        $this->shareFile($pdfId, $data['email']);
        unlink(static::PATH_DIR_UPLOADS . $fileName);
    }

    private function uploadFile(string $fileName): string
    {
        return $this->googleDriveClientService->uploadFile($fileName, static::PATH_DIR_UPLOADS);
    }
    private function createFilePdf(string $reportSpreadsheetId, string $email): string
    {
        $fileName = $email .'_'. (new \DateTime)->format('Y-m-d_h_i_s').'.pdf';
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
                (new \DateTime())->getTimestamp()
            )
            ->id;
    }
}