<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Report\ReportService;
use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;
use Google_Service_Drive_Permission;
use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;
use Unirest\Exception;

class GoogleDriveClientService
{
    /**
     * @var Google_Service_Sheets
     */
    private $service;

    public function __construct()
    {
        $client = new Google_Client();
        $client->setApplicationName('Google Drive');
        $client->setScopes(Google_Service_Drive::DRIVE);
        $client->setAuthConfig(__DIR__ .'/../../credentials.json');
        $client->useApplicationDefaultCredentials();
        $this->service = new Google_Service_Drive($client);
    }

    public function exportFile(string $reportSpreadsheetId)
    {
       return $this->service->files->export($reportSpreadsheetId, 'application/pdf', ['alt' => 'media']);
    }

    public function copyFile(string $originFileId, int $copyTitle): Google_Service_Drive_DriveFile
    {
        $fileMetadata = new Google_Service_Drive_DriveFile([
                'name' => $copyTitle,
                'parents' => [
                    $_ENV['REPORT_FOLDER']
                ]
            ]
        );

        return $this->service->files->copy($originFileId, $fileMetadata);
    }

    public function createFile(string $name)
    {
        $fileMetadata = new Google_Service_Drive_DriveFile([
            'name' => $name,
            'mimeType' => 'application/vnd.google-apps.spreadsheet',
            'parents' => [
                $_ENV['REPORT_FOLDER']
            ]
        ]);
        $this->service->files->create($fileMetadata, ['fields' => 'id']);
    }

    public function share(string $id, string $email): void
    {
        $userPermission = new Google_Service_Drive_Permission([
            'type' => 'user',
            'role' => 'writer',
            'emailAddress' => $email
        ]);

        $this->service->permissions->create(
            $id, $userPermission, ['fields' => 'id']
        );
    }

    public function uploadFile(string $fileName, string $path, string $mimeType = 'application/pdf')
    {
        $fileMetadata = new Google_Service_Drive_DriveFile([
            'name' => $fileName,
            'parents' => [
                $_ENV['REPORT_FOLDER']
            ]
        ]);
        $content = file_get_contents($path.$fileName);
        $file = $this->service->files->create($fileMetadata, array(
            'data' => $content,
            'mimeType' => $mimeType,
            'uploadType' => 'multipart',
            'fields' => 'id'));
        return $file->id;
    }
}