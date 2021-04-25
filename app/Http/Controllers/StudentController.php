<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    function saveStudent(Request $req){
        $stud = new Student;
        $stud->firstname = $req->firstname;
        $stud->lastname = $req->lastname;
        $stud->birthdate= $req->birthday;
        $stud->address = $req->address;
        $stud->year_level = $req->yearlevel;
        $stud->course = $req->course;
        $stud->id_number = $req->student_id;
        $stud->save();
        return back();
    }

    function retrieveStudent(){
        $data= Student::all();
        return view('student-list', ['data'=>$data]);
    }
}
