<?php

declare(strict_types=1);

namespace App;

use App\Services\AdditionalOption;
use App\Services\Director;
use App\Services\House;
use App\Services\Builders\Builder;
use App\Services\MainType;
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

    public function __construct()
    {
        $this->view = new View();
        $this->validation = new ValidationService();
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
            $mainData = new House($data);
            $mainType = new MainType($data);
            $additionalOption = new AdditionalOption($data);
            $builder = new Builder($mainData, $mainType, $additionalOption);
            $result = (new Director($builder))->build();
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
}