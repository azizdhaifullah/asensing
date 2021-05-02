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
}
