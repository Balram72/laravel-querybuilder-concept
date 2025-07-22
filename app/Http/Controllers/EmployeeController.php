<?php

namespace App\Http\Controllers;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmployeeController extends Controller
{
    public function showEmployee(){
        // $employee = DB::table('employees')
        //     ->join('cities', 'employees.city', '=', 'cities.id');
        //      ->select('employees.*','cities.city_name')
        //     // ->where('employees.email','sita@gmail.com')
        //     //->where('employees.name','like','s%')
        //      ->where('cities.city_name','=','mumbai')
        // return view('employee',compact('employee'));


        // using the Having clause to filter results
            //  $employee = DB::table('employees')
            //     ->join('cities', 'employees.city', '=', 'cities.id')
            //     ->select(DB::raw('count(*) as total_employee'),'cities.city_name')
            //     ->groupBy('city_name','age')
            //     ->having('total_employee','>','1')
            //     ->get();
            //     return $employee;
        
        // using the HavingBetween clause to filter results
            // $employee = DB::table('employees')
            //     ->join('cities', 'employees.city', '=', 'cities.id')
            //     ->select(DB::raw('count(*) as total_employee'),'cities.city_name')
            //     ->groupBy('city_name')
            //     ->havingBetween('total_employee', [1, 2])
            //     ->get();

        // using the LeftJoin clause to filter results
            // $employee = DB::table('employees')
            //     ->leftJoin('cities', 'employees.city', '=', 'cities.id')
            //     ->get();          
            // return $employee;
        // using the LeftJoin clause to filter results
            //  $employee = DB::table('employees')
            //             ->rightJoin('cities', 'employees.city', '=', 'cities.id')
            //             ->get();          
            // return $employee;
        // using the CrossJoin clause to filter results
            // $employee = DB::table('employees')
            //     ->crossJoin('cities')
            //     ->get();
            // return $employee;

        //Join using the JoinClause method
           
            $employee = DB::table('employees')
                ->leftJoin('cities', function (JoinClause $join) {
                    $join->on('employees.city', '=', 'cities.id')
                         ->where('employees.name', 'like', 's%');
                })
                ->select('employees.*', 'cities.city_name')
                ->get(); 
             return view('employee',compact('employee'));         
    }

    public function uniondata(){
        $lecturers = DB::table('lecturers')
            ->join('cities', 'lecturers.city', '=', 'cities.id')
            ->select('name', 'email', 'city_name')
            ->where('city_name', '=', 'Delhi' );
            
        $students = DB::table('students')
            ->join('cities', 'students.city', '=', 'cities.id')
            ->select('name', 'email', 'city_name')
            ->union($lecturers)
            ->where('city_name', '=', 'Chennai' )
            ->get();

        return $students;
    }

    public function whenData(){
        $test = true; // change this to false to see the effect
        $students = DB::table('students')
            ->when($test, function ($query) {
                $query->where('age', '>',20);  // flase  -> go to the else part
            },function ($query) {
                $query->where('age', '<', 20); //else part
            })
            ->get();
        return $students;
    }
    public function chunkData(){
        // using the chunk method to process large datasets
                 $students = DB::table('students')
                        ->orderBy('id')
                        ->chunk(3, function ($students) {
                            echo "<div style='margin-bottom: 20px;border:1px solid red'>";
                                foreach ($students as $student) {
                                    echo $student->name . '<br>';
                                }
                            echo "</div>";
                        });

        // use the chunkById method to process large datasets
            // $students = DB::table('students')
            //     ->orderBy('id')
            //     ->chunkById(3, function  ($students) {
            //         echo "<div style='margin-bottom: 20px;border:1px solid           red'>";     
            //             foreach ($students as $student) {
            //                DB:table('students')
            //                 ->where('id', $student->id)
            //                 ->update(['status' => 'true']);
            //                 echo $student->name . '<br>';
            //             }
            //         echo "</div>";
            //     });
    }
}
