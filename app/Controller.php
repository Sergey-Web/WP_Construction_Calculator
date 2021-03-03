<?php

declare(strict_types=1);

namespace App;

use App\Services\AdditionalOption;
use App\Services\CellService;
use App\Services\DateTimeService;
use App\Services\GoogleDriveClientService;
use App\Services\GoogleSpreadsheetClientService;
use App\Services\HouseCalc;
use App\Services\MainTypeCalc;
use App\Services\NumericService;
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

            if (!$this->validation->checkRequiredData($data)) {
                throw new \Exception('error validation');
            }

            $house = new HouseCalc($data);
            $mainType = new MainTypeCalc($data);
            $additionalType = new AdditionalOption($data);
            $googleFileName = (new \DateTime)->format('Y-m-d_h_i_s');

            $spreadsheetId = $this->googleDriveClientService
                ->copyFile(
                    $_ENV['CALC_SPREADSHEET_ID'],
                    $googleFileName
                )
                ->id;

            $this->googleClientSpreadsheetService->updateMainParams($spreadsheetId, $house, $_ENV['CALC_HOUSE_PARAMS_RANGE']);
            $this->googleClientSpreadsheetService->updateCheckBoxRequireOptions($spreadsheetId, $mainType, $_ENV['CALC_MAIN_TYPES_RANGE']);
            $this->googleClientSpreadsheetService->updateCheckBoxOptions($spreadsheetId, $additionalType, $_ENV['CALC_ADDITIONAL_OPTIONS_RANGE']);

            $activeTypes = $mainType->getActiveOptions();
            $dataMainTypesInactive = $mainType->getInactiveOptions();
            $dataAdditionalOption = $additionalType->getActiveOptions();
            $dataButchUpdate = [];

            foreach ($activeTypes as $key => $item) {
                $dataButchUpdate[] = [
                    'range' => $_ENV['CALC_TAB_NAME'] . (new $item)->getNameCellType(),
                    'values' => [[(int)$data[$key]]]
                ];
            }

            foreach ($activeTypes as $key => $item) {
                $dataButchUpdate[] = [
                    'range' => $_ENV['CALC_TAB_NAME'] . (new $item)->getNameCellMainActive(),
                    'values' => [['TRUE']]
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

            $additionalTypes = $this->googleClientSpreadsheetService
                ->getValueCells($spreadsheetId,  $_ENV['REPORT_RESULT_ADDITIONAL_TYPE_RANGE']);

            $mainTypes = $this->googleClientSpreadsheetService
                ->getValueCells($spreadsheetId,  $_ENV['REPORT_RESULT_MAIN_TYPE_RANGE']);

            $keysMainType = array_keys($mainType->getOptions());
            $keysAdditionalType = array_keys($additionalType->getOptions());

            $costMainTypesActive = CellService::getDataActiveOptions($costMainType, $data, $keysMainType);
            $mainTypeCostSum = CellService::sumCells($costMainTypesActive);
            $additionalOptionSum = CellService::sumCells($additionalOption);
            $totalCost = $mainTypeCostSum + $additionalOptionSum;
            $shiftDaysParallelJobs = DateTimeService::daysOffsetFromParallelJobs(
                $mainTypeDays,
                $mainTypePercent,
                $keysMainType
            );
            $mainDays = $this->result($mainTypeDays, $keysMainType);
            $totalDays = DateTimeService::getTotalWorkTime($mainDays, $shiftDaysParallelJobs);

            $dataHouse = [
                'area' => $data['area'],
                'numberRooms' => $data['numberRooms'],
                'numberBathrooms' => $data['numberBathrooms'],
                'numberInhabitants' => $data['numberInhabitants'],
            ];

            $result = [
                'house' => $dataHouse,
                'calcId' => $spreadsheetId,
                'fileName' => $googleFileName,
                'mainTypeCost' => $this->result($costMainType, $keysMainType),
                'additionalTypeCost' => $this->result($additionalOption, $keysAdditionalType),
                'mainTypeCostInactive' => array_keys($dataMainTypesInactive),
                'mainTypeSum' => NumericService::costSeparator($mainTypeCostSum, ' '),
                'mainTypeDays' => $mainDays,
                'mainTypePercent' => $this->result($mainTypePercent, $keysMainType),
                'additionalOptionSum' => NumericService::costSeparator($additionalOptionSum,' '),
                'shiftDaysParallelJobs' => $shiftDaysParallelJobs,
                'totalCost' => NumericService::costSeparator($totalCost, ' '),
                'totalDays' => DateTimeService::getMonthDate($totalDays),
                'additionalTypes' => $additionalTypes,
                'mainTypes' => $mainTypes,
            ];

        } catch (\Exception $e) {
            echo json_encode(['error' => $e->getMessage()]);wp_die();
        }

        echo json_encode($result);wp_die();
    }

    public function saveReport(array $data): void
    {
        try {
            if (!$this->validation->checkRequiredReportId($data)) {
                throw new \Exception('error validation report');
            }

            (new ReportService())->save($data);
        } catch (\Exception $e) {

            echo $e->getMessage();
            wp_die();
        }
        echo 'ok';
        wp_die();
    }

    private function result(array $resultPercentCompletionRange, array $types): array
    {
        $result = [];
        foreach ($resultPercentCompletionRange as $key => $item ) {
            $result[$types[$key]] =  $item[0];
        }

        return $result;
    }
}