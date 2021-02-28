<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.employee.employeeList');
    }

    public function createEmployee()
    {
        return view('admin.employee.createEmployee');
    }

    public function detailEmployee()
    {
        return view('admin.employee.detailEmployee');
    }
}
