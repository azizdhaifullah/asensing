<?php namespace App\Repositories;

use App\Models\EmployeeData;

class EmployeeRepository
{
    protected $model;

    public function __construct(EmployeeData $employeeData)
    {
        $this->model = $employeeData;
    }

    public function getAllEmployee(){
        return $this->model->all();
    }

    public function saveEmployee($data){
        return $this->model->insert($data);
    }
}
