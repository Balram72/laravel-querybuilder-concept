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

    public function addUser()
    {
        // Data to be inserted in use insert method
            $users =  DB::table('users')
                    ->insert([
                        [
                            'name' => 'Shyam',
                            'email' => 'shyma@gmail.com',
                            'age' => 27,
                            'city' => 'Ganjam'
                        ],
                    ]);
        // Data to be inserted in use insertOrIgnore method
            // $users =  DB::table('users')
            //         ->insertOrIgnore([     // This will ignore duplicate entries
            //              [
            //                 'name' => 'Ravi Das',
            //                 'email' => 'ravi@gmail.com',
            //                 'age' => 27,
            //                 'city' => 'Ganjam'
            //             ],
            //         ]);
        // Data to be inserted in use upsert method
            // $users =  DB::table('users')
            //         ->upsert(  // This will update existing records or insert new ones
            //                [
            //                 'name' => 'Ravi Das',
            //                 'email' => 'abc@gmail.com',
            //                 'age' => 21,
            //                 'city' => 'rampur'
            //                ],
            //                ['email'], // Unique key to check for existing records
            //                 ['city'] // Columns to update if a record exists
            //  );
        // Data to be inserted in use insertGetId method
            //$users =  DB::table('users')
            //         ->insertGetId([  // This will insert a new record and return the inserted ID. using only outoincrement id is available for  database
            //            'name' => 'Rani Panda',
            //             'email' => 'rani@gmail.com',
            //             'age' => 22,
            //             'city' => 'Bhubaneswar'
            //     ]); 
            // dd($users); 
        if($users){
            echo "<h1>Data Successfully Added.</h1>";
        } else {
             echo "<h1>Data Not Added.</h1>";
        }
    }
    public function updateUser()
    {
        // Data to be updated in use update method
            $users = DB::table('users')
                    ->where('id',13) // Specify the user ID to update
                    ->update([
                        'name' => 'Abc'
                    ]);
        // Data to be updateOrInsert method
            // $users = DB::table('users')
            //         ->updateOrInsert( // This will update the record if it exists, or insert a new one .
            //             ['email' => 'user1@gmail.com','name' => 'user1'], 
            //             ['email' => 'nesha@gmail.com','name'=>'Nesha'] 
            //         );
        // Data to be updated in use increment method
            // $users = DB::table('users')
            //         ->where('id', 13) // Specify the user ID to update
            //         ->increment('age', 3); // Increment the age by 3
        // Data to be updated in use decrement method
            // $users = DB::table('users')
            //         ->where('id', 13) // Specify the user ID to update
            //         ->decrement('age', 2,['city'=>'Delhi']); // Decrement the age by 2
        // data to be update incrementEach method
            // $users = DB::table('users')
            //         ->where('id', 13) // Specify the user ID to update
            //         ->incrementEach(['age'=>2,'votes'=>1]); // Increment the age by 2 and votes by 1
        
  
        if($users){
            echo "<h1>Data Successfully Updated.</h1>";
        } else {
            echo "<h1>Data Not Updated.</h1>";  
        }
    }

    public function deleteUser($id){
        $users = DB::table('users')->where('id', $id)->delete();
            if($users){
                return redirect()->route('home');   
            }else{
                echo "<h1>Data Not Deleted.</h1>";
            }
    }

    public function deleteAllUser(){
        $users = DB::table('users')->truncate(); // This will delete all records in the users table
        if($users){
           return redirect()->route('home');
        } 
    }

}
