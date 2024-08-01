<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{   
    public function create(){
        return view("Student.create");
    }

    public function add(request $request){
        $student = new Student();
        $student->name=$request->firstName;
        $student->age=$request->age;
        $student->phone=$request->phone;
        $student->save();
        return "data saved successfully";
    }

    public function getting(){
        $stu1 = Student::get();
        return view('Student.list',['stu1'=> $stu1]);
    }

    public function update($id){
        $student2 = Student::find($id);
        return view('Student.edit',['student2'=> $student2]);
    }

    public function updated(request $request, $id){
        $student = Student::find($id);
        $student->name=$request->firstName;
        $student->age=$request->age;
        $student->phone=$request->phone;
        $student->save();
        return "data updated successfully";

    }

    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        return back();
    }
}



