<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\designation;
use App\Models\department;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function create(){
        $departments= department::get();
        $designations=designation::get();
        return view("employee.create",compact("departments","designations"));
}
public function store(request $request){
    $employee=new employee();
    $employee->name=$request->name;
    $employee->gender=$request->gender;
    $employee->dob=$request->dob;
    $employee->address=$request->adress;
    $employee->mobile=$request->mobile;
    $employee->email=$request->email;
    $employee->department = $request->input('department');
    $employee->desgination = $request->input('desgination');
    $employee->doj=$request->doj;
    $employee=save();
    return "registration successfully";

}

}