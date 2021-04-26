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
        $stud->birthdate= $req->birthdate;
        $stud->address = $req->address;
        $stud->year_level = $req->yearlevel;
        $stud->course = $req->course;
        $stud->id_number = $req->id_number;
        $stud->save();
        return back();
    }

    function retrieveStudent(){
        $data= Student::all();
        return view('student-list', ['data'=>$data]);
    }

    function removeStudent(Request $id){
        $stud = Student::find($id);
        $stud->delete();
        return redirect()->route('student-list')->with('success','Student deleted.');
    }

    function editStudent(Request $id){
        echo "edit";
    }
}
