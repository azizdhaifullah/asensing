<?php namespace App\Services\AppServices\Employee;

use App\Repositories\EmployeeRepository;
use App\Models\MrRegionData;
use App\Validator\ApiValidator\Employee\EmployeeValidator;
use Illuminate\Support\Facades\Request;

class EmployeeService
{
    protected $employeeRepository;
    protected $regionDataModel;
    protected $employeeValidator;

    public function __construct(
        EmployeeRepository $employeeRepository,
        MrRegionData $regionDataModel,
        EmployeeValidator $employeeValidator
    )
    {
        $this->employeeRepository = $employeeRepository;
        $this->regionDataModel = $regionDataModel;
        $this->employeeValidator = $employeeValidator;
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

    public function createBulkEmployee(){
        $request = Request::all();

        $response =  [
            "status" => false,
            "message" => ""
        ];

        try {
            if(isset($request['data']) && !empty($request["data"])){
                $validate = $this->employeeValidator->validateCreateBulkEmployee();
                if($validate->fails()){
                    return $response =  [
                        "status" => false,
                        "message" => $validate->errors()
                    ];
                }

                $data = collect($request["data"])->map(function ($value){
                    return [
	                    'employee_name' => $value["name"],
	                    'employee_number' => $value["employeeNumber"],
	                    'employee_email' => $value["emailAddress"],
	                    'employee_phone_number' => $value["phoneNumber"],
	                    'employee_created_by' => 0,
                        'employee_region_id' => $value["regionId"] ? $value["regionId"] : 1,
                        'created_at' => date("Y-m-d H:i:s")
                    ];
                });

                $this->employeeRepository->saveEmployee($data->toArray());

                $response =  [
                    "status" => true,
                    "message" => ""
                ];
            }else{
                $response =  [
                    "status" => true,
                    "message" => "Data is Empty"
                ];
            }
        } catch (\Exception $e) {
			$response =  [
				"status" => false,
				"message" => $e->getMessage()
			];
        }

        return $response;
    }
}
