<?php

namespace App\Http\Controllers;
use App\Models\department;
use Illuminate\Http\Request;

class departmentcontroller extends Controller
{
    public function create(){
        return view("department.create");
}
   public function store(request $request){
    $department=new department();
    $department->name=$request->name;
    $department->description=$request->description;
    $department->save();
    return "data saved sucessfully";

   }
public function display(){

}

}
 