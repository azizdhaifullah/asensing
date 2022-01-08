<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeData extends Model
{
    use HasFactory;

    protected $table = 'employee_data';
    protected $primaryKey = 'employee_id';
    protected $guarded = ['employee_id'];
    protected $id;

    public function validate($request){
        $request->validate([
            'employee-name' => 'required|max:25',
            'employee-number' => 'required|max:255',
            'employee-email' => 'required|email',
            'employee-phone' => 'required|max:25',
            'employee-region' => 'required'
        ]);
    }
    
    public function saveEmployee($data){
        $this->create($data);
    }

    public function updateEmployee($data, $id){
        $employee = $this->find($id);
        $employee->fill($data)->save();
    }
}
