<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class PullController extends Controller
{
    public function getStudent(Request $request){

        if($request->submit == "filtered"){
            if($request->gender=="" && $request->age==""){
                $Students = Student::all();

            }else if($request->gender != "" && $request->age == "") {
                $Students = Student::where('Gender',$request->gender)->get();

            }else if ($request->age != "" && $request->gender == ""){
                $Students = Student::where('Age','>', 20)
                            ->orderBy('Age')
                            ->get();
            }else if ($request->gender != "" && $request->age != ""){
                $Students = Student::where([
                            ['Gender', $request->gender],
                            ['Age', '>', 20]])
                            ->orderBy('Age')
                            ->get();
            }
        }
        else if($request->submit == "cleared"){
            $Students = Student::all();
        }
        else{
            $Students = Student::all();
        }
        return view('main', compact('Students'));



     }

     public function createStudent(Request $request){
         Student::create($request->all());
        return redirect('/')->with('success', 'New data successfully inserted');

     }

     public function editStudent($id){
        $data_student = Student::find($id) ;

        return view('edit', compact('data_student'));


     }

     public function updateStudent(Request $request, $id){
        $data_student = Student::find($id) ;
        $data_student -> update($request->all());
        return redirect('/')->with('success', 'User data successfully updated');


     }
     public function deleteStudent($id){
        $data_student = Student::find($id) ;
        $data_student -> delete($data_student);
        return redirect('/')->with('success', 'Data successfully deleted');


     }
}
