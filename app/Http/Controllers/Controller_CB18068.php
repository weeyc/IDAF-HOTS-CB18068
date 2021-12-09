<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class Controller_CB18068 extends Controller
{
    public function getStudent(Request $request){

        $Students = Student::all();
        return view('index', compact('Students'));
     }

     public function createStudent(Request $request){
        Student::create($request->all());
        return redirect('/')->with('success', 'New data successfully inserted');
    }

    public function deleteStudent($id){
        $data_student = Student::find($id) ;
        $data_student -> delete($data_student);
        return redirect('/')->with('success', 'Data successfully deleted');
     }

}
