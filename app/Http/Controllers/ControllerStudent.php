<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ControllerStudent extends Controller
{
    public function all(){
        $students = Student::all();
        return view("student.list_student",[
            "students"=>$students
        ]);
    }
    public function add(){
        $students = Student::all();
        return view("student.add_student",[
            "students"=>$students
        ]);
    }
    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
            Student::create([
                "name"=>$request->get("name"),
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone"),
            ]);
            return redirect()->to("student");
    }
}
