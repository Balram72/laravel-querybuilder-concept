<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Student;

class StudentController extends Controller
{
     public function showStudent(){
         $students = DB::table('students')->get();
         return view('student.allstudent',['data' =>$students]);

    }

    public function singleStudent($id){
        $student = DB::table('students')->where('id', $id)->get();
        return view('student.student', ['data' => $student]);
    }

    public function addStudent(Request $req){
        $students = DB::table('students')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age,
            'city' => $req->city,
        ]);
        if($students){
           return redirect()->route('students.index');
        }else{
            echo "student not added";
        }
    }

    public function updatePage($id){
            // $student = DB::table('students')->where('id', $id)->get();
        $student = DB::table('students')->find($id);
        return view('student.updatestudent', ['data' => $student]);
    }

    public function updateStudent(Request $req, $id){
        $student = DB::table('students')->where('id', $id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'age' => $req->age,
            'city' => $req->city,
        ]);
        if ($student) {
            return redirect()->route('students.index');
        } else {
            echo "student not updated";
        }
    }

    public function deleteStudent($id){
        $deleted = DB::table('students')->delete($id);
        if ($deleted) {
            return redirect()->route('students.index');
        }
    }
}
