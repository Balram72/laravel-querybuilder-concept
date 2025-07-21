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
}
