<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Builders\IBuilder;

class Director implements IDirector
{
    /**
     * @var IBuilder
     */
    private $builder;
    /**
     * @var GoogleSpreadsheetClientService
     */
    private $googleClientSpreadsheetService;
    /**
     * @var GoogleDriveClientService
     */
    private $googleDriveClientService;

    public function __construct(IBuilder $builder)
    {
        $this->builder = $builder;
        $this->googleClientSpreadsheetService = new GoogleSpreadsheetClientService();
        $this->googleDriveClientService = new GoogleDriveClientService();
    }

    public function build(): array
    {
        $calcSpreadsheetId = $this->copySpreadsheet($_ENV['CALC_SPREADSHEET_ID']);
        $this->clearActiveOptions($calcSpreadsheetId);
        $this->addMainData($calcSpreadsheetId);
        $this->setOptions($calcSpreadsheetId);
        $resultCost = $this->getResult($calcSpreadsheetId, $_ENV['CALC_RESULT_COST_RANGE']);
        $resultDays = $this->getResult($calcSpreadsheetId, $_ENV['CALC_RESULT_DAYS_RANGE']);
        $resultPercentCompletionRange = $this->getResult($calcSpreadsheetId, $_ENV['CALC_RESULT_PERCENT_COMPLETION_RANGE']);

        return [
            'calcId' => $calcSpreadsheetId,
            'resultCost' => $this->resultFormation($resultCost),
            'resultDays' => $this->resultFormation($resultDays),
            'resultPercent' => $this->resultFormation($resultPercentCompletionRange)
        ];
    }

    private function clearActiveOptions(string $spreadsheetId): void
    {
        $options = $this->builder->getOptions();
        $values = array_fill(0, count($options), [false]);
        $this->googleClientSpreadsheetService->updateValueCells($spreadsheetId, $_ENV['CALC_CHECKBOX_RANG'], $values);
    }

    private function addMainData(string $spreadsheetId): void
    {
        foreach ($this->builder->getMainData() as $item) {
            $this->googleClientSpreadsheetService
                ->updateValueCells($spreadsheetId, $item->getNameCell(), [[(int)$item->getValue()]]);
        }
    }

    private function setOptions(string $spreadsheetId): void
    {
        $options = $this->builder->getOptionsReceived();
        $values = [
            [true]
        ];
        foreach ($options as $key => $item) {
            $this->googleClientSpreadsheetService->updateValueCells($spreadsheetId, (new $item)->getNameCellCheckBox(), $values);
            $this->googleClientSpreadsheetService->updateValueCells(
                $spreadsheetId,
                (new $item)->getNameCellType(),
                [[(int)$this->builder->getTypes()[$key]]]
            );
        }
    }

    private function getResult(string $spreadsheetId, string $range): array
    {
        return $this->googleClientSpreadsheetService
                ->getValueCells($spreadsheetId, $range);
    }

    private function createNameSpreadsheet(): int
    {
        return (new \DateTime())->getTimestamp();
    }

    private function copySpreadsheet(string $spreadsheetId): string
    {
        return $this->googleDriveClientService
            ->copyFile(
                $spreadsheetId,
                $this->createNameSpreadsheet()
            )
            ->id;
    }

    private function resultFormation(array $resultPercentCompletionRange): array
    {
        $result = [];
        $types = array_keys($this->builder->getOptions());
        foreach ($resultPercentCompletionRange as $key => $item ) {
            $result[$types[$key]] =  $item[0];
        }
        return $result;
    }
}