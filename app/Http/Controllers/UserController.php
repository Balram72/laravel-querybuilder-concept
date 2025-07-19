<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function showUser()
    {
        
        // return $users;
        //dd($users);
        //dump($users);
        // foreach($users as $user) {
        //     echo  "Name: " . $user->name . "<br>";
        //     echo "Email: " . $user->email . "<br>";
        //     echo "Age: " . $user->age . "<br>";
        //     echo "City: " . $user->city . "<br>";
        //     echo "<hr>"; 
        // }

            // show the All Users Data
                // $users = DB::table('users')->get();
            //show the single user data 
                //$users = DB::table('users')->where('id',2)->get();
            // show the data in find method
                //  $users = DB::table('users')->find(2);
                //  return $users;
            //show the data in select method
                // $users = DB::table('users')->select('name','email as UserEmail')->get();
                // return $users;
            //show the data in destinct method
                // $users = DB::table('users')
                //             ->select('city')
                //             ->distinct()   // Use distinct to get unique cities
                //             ->get();
                // return $users;
            // show the data in plunk method
                // $users = DB::table('users')->pluck('name');  // pluck retrieves a single column's values  
                // return $users;

            // show the data in where method
                // $users = DB::table('users')
                //         ->where('city', 'New York')
                //         ->where('age','>',24)
                //         ->where('name','like','U%')  // 'U%' -> wilecard search for names starting with 'U'
                //         ->get();
                // return view('allusers',['data' =>$users]);

            // show the data in where multipau different way method
                // $users = DB::table('users')
                //         ->where([
                //             ['city', '=', 'New York'],
                //             ['age', '>', 24],
                //             ['name', 'like', 'U%']
                //         ])
                //         ->get();
                // return view('allusers',['data' =>$users]);

           // show the data in orWhere method
                // $users = DB::table('users')
                //         ->where('city', 'New York')
                //         ->orWhere('age', '>', 24)
                //         ->get();
                // return view('allusers',['data' =>$users]);
            // show the data in whereBetween method

                // $users = DB::table('users')
                //         ->whereBetween('age', [24, 30])  // Get users between ages 20 and 30
                //         ->get();
                // return view('allusers',['data' =>$users]);

            // show the data in whereNotBetween method

                // $users = DB::table('users')
                //         ->whereNotBetween('age', [24, 30])  // Get users not between ages 20 and 30
                //         ->get();
                // return view('allusers',['data' =>$users]);

            // show the data in whereIn method

                // $users = DB::table('users')
                //         ->whereIn('city', ['New York', 'Chicago'])
                //         ->get();
                // return view('allusers',['data' =>$users]);

            // show the data in whereNotIn method
                // $users = DB::table('users')
                //         ->whereNotIn('city', ['New York', 'Chicago'])
                //         ->get();
                // return view('allusers',['data' =>$users]);

            // show the data in whereNull method
                // $users = DB::table('users')
                //         ->whereNull('email')
                //         ->get();
                // return view('allusers',['data' =>$users]);

            // show the data in whereNotNull method
                // $users = DB::table('users')
                //         ->whereNotNull('email')
                //         ->get();                         
                // return view('allusers',['data' =>$users]);


            // show the data in date method
                // $users = DB::table('users')
                //         ->whereDate('created_at', '2025-07-18')
                //         ->get();
                // return view('allusers',['data' =>$users]);
            
            // show the data in month method
                // $users = DB::table('users')
                //         ->whereMonth('created_at', '08')  // Get users created in July
                //         ->get();
                // return view('allusers',['data' =>$users]);

            //show the data in year method
                // $users = DB::table('users')
                //         ->whereYear('created_at', '2024')  // Get users created in 2025
                //         ->get();
                // return view('allusers',['data' =>$users]);
            //show the data in day method
                // $users = DB::table('users')
                //         ->whereDay('created_at', '18')  // Get users created on the 18th day of the month
                //         ->get();
                // return view('allusers',['data' =>$users]);
            
            // show the data in time method
                // $users = DB::table('users')
                //         ->whereTime('created_at', '14:07:25')  // Get users created at noon
                //         ->get();
                // return view('allusers',['data' =>$users]);

            // show the data in orderBy method
                // $users = DB::table('users')
                //         ->orderBy('city')  // Order by name in ascending order
                //         ->orderBy('age','desc') // Order by age in descending order
                //         ->get();
                // return view('allusers',['data' =>$users]);
            // show the data in first method
                // $users = DB::table('users')
                //         //->latest() //use latest to get the most recent user
                //          //->oldest()   // Use oldest to get the first user
                //         ->inRandomOrder() // Use inRandomOrder to get a random user
                //         ->first();  // Get the first user
                // return $users;  
            // show the limit method
                // $users = DB::table('users')
                //         // ->limit(3)  // Limit the result to 5 users
                //         // ->offset(3)  // Skip the first 3 users
                //         ->take(3)  // Take the first 3 users  (take is same as limit)
                //         ->skip(3) // Skip the first 2 users   (skip is same as offset)
                //         ->get();
                // return view('allusers',['data' =>$users]);
            // show the data in count method
                // $users = DB::table('users')
                //         ->count();  // Count the total number of users
                // return $users;
            // show the data in max method
                // $users = DB::table('users')
                //         ->max('age');  // Get the maximum age of users
                // return $users;
            // show the data in min method
                // $users = DB::table('users')   
                //         ->min('age');  // Get the minimum age of users
                // return $users;  
            // show the data in sum method
                // $users = DB::table('users')
                //         ->sum('age');  // Get the sum of all users' ages
                // return $users;
            // show the data in avg method
                // $users = DB::table('users')
                //         ->avg('age');  // Get the average age of users
                // return $users;

         $users = DB::table('users')->get();
         return view('allusers',['data' =>$users]);

    }
    public function showSingleUser($id)
    {
        $user = DB::table('users')->where('id',$id)->get();
        return view('user', ['data' => $user]);
    }

    public function deleteUser($id){
        DB::table('users')->where('id', $id)->delete();
        $users = DB::table('users')->get();
        return view('allusers', ['data' => $users]);
    }
}
