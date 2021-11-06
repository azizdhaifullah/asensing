<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\ApiController;
use App\Services\AppServices\Employee\EmployeeService;
use Exception;


class EmployeeApiController extends ApiController
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function getEmployeeList()
    {
        try {
            $data = $this->employeeService->getAllEmployee();
            return $this->setResponse(200, "Success Get Employee", $data);
        } catch (Exception $e) {
            return $this->setResponse(400, $e->getMessage());
        }
    }
}
