<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Supervisors;

class EmployeeController extends Controller
{
    public function show(){
        $employees = Employees::all();
        $supervisors = Supervisors::all();
        return view('employee.index',['supervisors' => $supervisors,'employees' => $employees]);
    }
}
