<?php

declare(strict_types=1);

namespace App;

use App\Services\AdditionalOption;
use App\Services\DateTimeService;
use App\Services\Director;
use App\Services\GoogleDriveClientService;
use App\Services\GoogleSpreadsheetClientService;
use App\Services\House;
use App\Services\Builders\Builder;
use App\Services\MainType;
use App\Services\NumericService;
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

            $costMainType = $this->googleClientSpreadsheetService
                ->getValueCells($spreadsheetId,  $_ENV['CALC_RESULT_COST_RANGE']);

            $mainTypeDays = $this->googleClientSpreadsheetService
                ->getValueCells($spreadsheetId,  $_ENV['CALC_RESULT_DAYS_RANGE']);

            $mainTypePercent = $this->googleClientSpreadsheetService
                ->getValueCells($spreadsheetId,  $_ENV['CALC_RESULT_PERCENT_COMPLETION_RANGE']);

            $additionalOption = $this->googleClientSpreadsheetService
                ->getValueCells($spreadsheetId,  $_ENV['REPORT_RESULT_ADDITIONAL_OPTION_RANGE']);

            $keysMainType = array_keys($mainType->getOptions());

            $mainTypeSum = $this->sumCells($costMainType);
            $additionalOptionSum = $this->sumCells($additionalOption);
            $totalCost = $mainTypeSum + $additionalOptionSum;

            $result = [
                'calcId' => $spreadsheetId,
                'mainTypeCost' => $this->result($costMainType, $keysMainType),
                'mainTypeSum' => NumericService::costSeparator($mainTypeSum, ' '),
                'mainTypeDays' => $this->result($mainTypeDays, $keysMainType),
                'mainTypePercent' => $this->result($mainTypePercent, $keysMainType),
                'additionalOptionSum' => NumericService::costSeparator($additionalOptionSum,' '),
                'totalDays' => DateTimeService::getMonthDate($this->sumCells($mainTypeDays)),
                'totalCost' => NumericService::costSeparator($totalCost, ' '),
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

    private function result(array $resultPercentCompletionRange, array $types): array
    {
        $result = [];
        foreach ($resultPercentCompletionRange as $key => $item ) {
            $result[$types[$key]] =  $item[0];
        }

        return $result;
    }

    private function sumCells(array $data): int
    {
        $sum = 0;

        foreach ($data as $i) {
            if (!empty($i[0]) && $i[0] > 0) {
                $sum += preg_replace('/[^0-9]/', '', $i[0]);
            }
        }

        return $sum;
    }
}