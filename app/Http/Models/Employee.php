<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'db_employee';
    protected $primaryKey = 'EmployeeID';
}
