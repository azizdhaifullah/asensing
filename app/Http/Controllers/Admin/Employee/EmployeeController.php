<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Models\EmployeeData;
use App\Models\MrRegionData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    var $employeeData;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        EmployeeData $employeeData
    )
    {
        $this->middleware('auth');
        $this->employeeData = $employeeData;
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
        $employeeDetailData = $this->employeeData->where('employee_id', $id)->first();
        $regionData = $this->getRegionData();

        return view('admin.employee.detailEmployee', compact(
            'employeeDetailData',
            'regionData'
        ));
    }

    public function saveEmployee(Request $request)
    {
        $request->validate([
            'employee-name' => 'required|max:25',
            'employee-number' => 'required|max:255',
            'employee-email' => 'required|email',
            'employee-phone' => 'required|max:25',
            'employee-region' => 'required'
        ]);

        $this->employeeData::create([
            'employee_name' => $request['employee-name'],
            'employee_number' => $request['employee-number'],
            'employee_email' => $request['employee-email'],
            'employee_phone_number' => $request['employee-phone'],
            'employee_region_id' => $request['employee-region'],
            'employee_created_by' => Auth::user()->id
        ]);

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
}
