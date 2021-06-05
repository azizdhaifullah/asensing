<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Models\EmployeeData;
use App\Models\MrRegionData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Services\AppServices\Employee\FingerprintService;

class EmployeeController extends Controller
{
    protected $employeeData;
    protected $fingerprintService;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        EmployeeData $employeeData,
        FIngerprintService $fingerprintService
    )
    {
        $this->middleware('auth');
        $this->employeeData = $employeeData;
        $this->fingerprintService = $fingerprintService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employeeData = $this->employeeData::paginate(10);

        return view('admin.employee.employeeList', compact(
            'employeeData'
        ));
    }

    public function createEmployee()
    {
        $regionData = $this->getRegionData();

        return view('admin.employee.createEmployee', compact(
            'regionData'
        ));
    }

    public function detailEmployee($id)
    {
        $employeeDetailData = $this->employeeData->find($id);
        $regionData = $this->getRegionData();

        return view('admin.employee.detailEmployee', compact(
            'employeeDetailData',
            'regionData'
        ));
    }

    public function saveEmployee(Request $request)
    {
        $this->employeeData->validate($request);

        $this->employeeData->saveEmployee([
            'employee_name' => $request['employee-name'],
            'employee_number' => $request['employee-number'],
            'employee_email' => $request['employee-email'],
            'employee_phone_number' => $request['employee-phone'],
            'employee_region_id' => $request['employee-region'],
            'employee_created_by' => Auth::user()->id
        ]);

        return redirect()->route('employee');
    }

    public function updateEmployee(Request $request,$id)
    {
        $this->employeeData->validate($request);

        $this->employeeData->updateEmployee([
            'employee_name' => $request['employee-name'],
            'employee_number' => $request['employee-number'],
            'employee_email' => $request['employee-email'],
            'employee_phone_number' => $request['employee-phone'],
            'employee_region_id' => $request['employee-region'],
            'employee_fingerprint_id' => $request['employee-fingerprint'],
            'employee_updated_by' => Auth::user()->id,
            'updated_at' => date("Y-m-d H:i:s")
        ], $id);

        return redirect()->route('employee');
    }

    public function getRegionData(){
        $region = MrRegionData::all();
        $regionData = [];
        foreach ($region as $value) {
            $regionData[$value["mrr_id"]] = $value["mrr_name"];
        }

        return $regionData;
    }

    public function getFingerprintKey(){
        $fingerprintData = $this->fingerprintService->getFingerprint();
        return $fingerprintData;

        try {
            $this->fingerprintService->getLattepandaFingeprintStatus($fingerprintData['fingerprint_id']);
            return response()->json(['id' => $fingerprintData['fingerprint_id']], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $fingerprintData['fingerprint_id']], 500);
        }
    }
}
