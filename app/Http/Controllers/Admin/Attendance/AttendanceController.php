<?php

namespace App\Http\Controllers\Admin\Attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
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
        return view('admin.attendance.attendanceList');
    }

    public function getEmployee()
    {
        return view('admin.attendance.attendanceList');
    }

    public function getRegion($employee_id, $region_id)
    {
        return view('admin.attendance.attendanceList');
    }

    public function getList($employee_id, $region_id)
    {
        return ;
    }

    public function getImageDetail($attendance_id)
    {
        return view('admin.attendance.attendanceList');
    }

}

