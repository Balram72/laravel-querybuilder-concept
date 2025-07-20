<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Student;

class StudentController extends Controller
{
     public function showStudent(){
        // Featch tha normal data using the grt method
                // $students = DB::table('students')->get();

        // Fetch all students, ordered by 'id', simplePaginate with 4 items per page
                //  $students = DB::table('students')
                //              ->orderBy('id')
                //             ->simplePaginate(4);
        
        // Select only 'name' and 'email' columns,paginate 4 per page,use 'p' as the page parameter, start at page 2
                // $students = DB::table('students')->paginate(4, ['name', 'email'], 'p', 2);

        // Paginate students, 4 per page, using 'p' as the page parameter, starting at page 2
            // $students = DB::table('students')->paginate(4,['*'],'p',2);

        //use append to add additional query parameters to the pagination links
            // $students = DB::table('students')->paginate(4)->appends(['sort' => 'name']);

        // use append multiple query parameters
            // $students = DB::table('students')->paginate(4)->appends(['sort' => 'name', 'direction' => 'asc']);
            
        //use the fragment method to specify a custom fragment for the pagination links
            // $students = DB::table('students')->paginate(4)->fragment('info');        
            
        //Fetch all data in cursorPaginate
            // $students = DB::table('students')->orderBy('id')->cursorPaginate(4);
        
        $students = DB::table('students')->paginate(4,['*'],'info');
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
