<?php

declare(strict_types=1);

namespace App;

use App\Services\AdditionalOption;
use App\Services\Director;
use App\Services\GoogleDriveClientService;
use App\Services\GoogleSpreadsheetClientService;
use App\Services\House;
use App\Services\Builders\Builder;
use App\Services\MainType;
use App\Services\Options\HouseParams\IMainValues;
use App\Services\Report\ReportService;
use App\Services\ValidationService;

class Controller
{
    const MAIN_PAGE = 'main';
    /**
     * @var View
     */
    private $view;
    /**
     * @var ValidationService
     */
    private $validation;
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
        $this->view = new View();
        $this->validation = new ValidationService();
        $this->googleClientSpreadsheetService = new GoogleSpreadsheetClientService();
        $this->googleDriveClientService = new GoogleDriveClientService();
    }

    public function show(): void
    {
        $this->view->render(static::MAIN_PAGE);
    }

    public function getCost(array $data): void
    {
        $result = '';
        try {
            if (!$this->validation->checkRequiredData($data)) throw new \Exception('error validation');
            $house = new House($data);
            $mainType = new MainType($data);
            $additionalOption = new AdditionalOption($data);

            $spreadsheetId = $this->googleDriveClientService
                ->copyFile(
                    $_ENV['CALC_SPREADSHEET_ID'],
                    (new \DateTime())->getTimestamp()
                )
                ->id;

            $this->googleClientSpreadsheetService->updateMainParams($spreadsheetId, $house);
            $this->googleClientSpreadsheetService->updateCheckBoxOptions($spreadsheetId, $mainType, $_ENV['CALC_MAIN_TYPES_RANGE']);
            $this->googleClientSpreadsheetService->updateCheckBoxOptions($spreadsheetId, $additionalOption, $_ENV['CALC_ADDITIONAL_OPTIONS_RANGE']);

            $dataMainTypes = $mainType->getActiveOptions();
            $dataAdditionalOption = $additionalOption->getActiveOptions();
            $dataButchUpdate = [];

            foreach ($dataMainTypes as $key => $item) {
                $dataButchUpdate[] = [
                    'range' => $_ENV['CALC_TAB_NAME'] . (new $item)->getNameCellType(),
                        'values' => [[(int)$data[$key]]]
                ];
            }

            foreach ($dataAdditionalOption as $key => $item) {
                $dataButchUpdate[] = [
                    'range' => $_ENV['CALC_TAB_NAME'] . (new $item)->getNameCellType(),
                    'values' => [[(int)$data[$key]]]
                ];
            }

            $this->googleClientSpreadsheetService->updateButchValueCells(
                $spreadsheetId,
                $dataButchUpdate
            );

            $resultCost = $this->googleClientSpreadsheetService
                ->getValueCells($spreadsheetId,  $_ENV['CALC_RESULT_COST_RANGE']);

            $resultDays = $this->googleClientSpreadsheetService
                ->getValueCells($spreadsheetId,  $_ENV['CALC_RESULT_DAYS_RANGE']);

            $resultPercentCompletionRange = $this->googleClientSpreadsheetService
                ->getValueCells($spreadsheetId,  $_ENV['CALC_RESULT_PERCENT_COMPLETION_RANGE']);

            $keysMainType =  array_keys($mainType->getOptions());

            $result = [
                'calcId' => $spreadsheetId,
                'resultCost' => $this->resultMainTypes($resultCost, $keysMainType),
                'resultDays' => $this->resultMainTypes($resultDays, $keysMainType),
                'resultPercent' => $this->resultMainTypes($resultPercentCompletionRange,$keysMainType)
            ];

        } catch (\Exception $e) {
            echo $e->getMessage();wp_die();
        }

        echo json_encode($result);wp_die();
    }

    public function saveReport(array $data): void
    {
        try {
            if (!$this->validation->checkRequiredReportId($data)) throw new \Exception('error validation report');
            (new ReportService())->save($data);
        } catch (\Exception $e) {
            echo $e->getMessage();wp_die();
        }
        echo 'ok';wp_die();
    }

    private function resultMainTypes(array $resultPercentCompletionRange, array $types): array
    {
        $result = [];
        foreach ($resultPercentCompletionRange as $key => $item ) {
            $result[$types[$key]] =  $item[0];
        }

        return $result;
    }
}