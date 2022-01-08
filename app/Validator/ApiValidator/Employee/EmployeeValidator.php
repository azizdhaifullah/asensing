<?php namespace App\Validator\ApiValidator\Employee;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeValidator
{
    public function validateCreateBulkEmployee(){
       $request = Request::all();
       return Validator::make($request, [
              'data' => 'required',
              'data.*.name' => 'required',
              'data.*.employeeNumber' => 'required',
              'data.*.emailAddress' => 'required',
              'data.*.phoneNumber' => 'required'
        ]);
    }
}
