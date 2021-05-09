<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    public function index()
    {
        $student = Student::all();
        return view('list', compact('student'));
    }

    function store(Request $req){
            $data = $req->validate([
                'id_number' => 'required|max:255',
                'firstname' => 'required|max:255',
                'middlename' => 'required|max:255',
                'lastname' => 'required|max:255',
                'birthdate' => 'required|date',
                'address' => 'required|max:255',
                'year_level' => 'required|numeric',
                'course' => 'required|max:255',
            ]);
            $student = Student::create($data);
            return redirect('/students')->with('completed', 'Student has been added!');

        // return back();
    }
    
    public function create()
    {
        return view('create');
    }

    function show(){
        $data= Student::all();
        return view('students', compact('data'));
    }

    public function destroy($id_number){
        $student = Student::findOrFail($id_number);
        $student->delete();

        return redirect('students')->with('completed', 'Student has been removed.');
    }

    /**
     * wala pa ni
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('edit', compact('student'));
    }

    public function update(Request $req, $id)
    {
        $updateData = $req->validate([
            'id_number' => 'required|max:255',
            'firstname' => 'required|max:255',
            'middlename' => 'required|max:255',
            'lastname' => 'required|max:255',
            'birthdate' => 'required|date',
            'address' => 'required|max:255',
            'year_level' => 'required|numeric',
            'course' => 'required|max:255',
        ]);
        Student::where('id_number',$id)->update($updateData);
        return redirect('/students')->with('completed', 'Student has been updated');

    }
}
