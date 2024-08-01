<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\designation;
use App\Models\department;

class designationcontroller extends Controller
{
    public function create(){
        $departments= department::get();
        return view("designation.create",compact("departments"));

}
public function store(request $request){
    $designation=new designation();
    $designation->name=$request->name;
    $designation->department = $request->input('department');
    $designation->description=$request->description;
    $designation->save();
    return "data saved sucessfully";
}

public function getDesignation(String $id){
    $designation=designation::where(["department"=>$id])->get();
    return $designation;
}
}