<?php namespace App\Services\AppServices\Employee;

use App\Repositories\EmployeeRepository;
use App\Models\MrRegionData;

class EmployeeService
{
    protected $employeeRepository;
    protected $regionDataModel;

    public function __construct(
        EmployeeRepository $employeeRepository,
        MrRegionData $regionDataModel
    )
    {
        $this->employeeRepository = $employeeRepository;
        $this->regionDataModel = $regionDataModel;
    }

    public function getAllEmployee(){
        $employeeData =  $this->employeeRepository->getAllEmployee();

        $data = collect($employeeData)->map(function ($value){
            $employeeRegion = $this->regionDataModel
                              ->selectRaw('mrr_name as regionName')
                              ->where('mrr_id', $value->employee_region_id)
                              ->first();

            return [
                'employeeId' => $value->employee_id,
                'name' => $value->employee_name,
                'number' => $value->employee_number,
                'emailAddress' => $value->employee_email,
                'phoneNumber' => $value->employee_phone_number,
                'fingerprintId' => $value->employee_fingerprint_id,
                'regionName' => $employeeRegion->regionName
            ];
        });

        return $data;
    }
}
