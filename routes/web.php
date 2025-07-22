<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;

// User Routes

Route::get('/', [UserController::class, 'showUser'])->name('home');
Route::get('/user/{id}', [UserController::class, 'showSingleUser'])->name('view.user');
Route::get('/add', [UserController::class, 'addUser']);
Route::get('/update', [UserController::class, 'updateUser']);
Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('delete.user');
Route::get('/deletuser', [UserController::class, 'deleteAllUser']);


// Student Routes

Route::controller(StudentController::class)->group(function(){
    Route::get('/students', 'showStudent')->name('students.index');
    Route::post('/add-student', 'addStudent')->name('addnewStudent');
    Route::get('/student/{id}', 'singleStudent')->name('students.singleStudent');
    Route::get('/updatepage/{id}', 'updatePage')->name('students.updatePage');
    Route::put('/update/{id}','updateStudent')->name('students.updateStudent');
    Route::get('/delete-student/{id}', 'deleteStudent')->name('delete.students');
});
Route::view('/newstudent', 'student.addstudent');

// Employee Routes
Route::get('/employee', [EmployeeController::class, 'showEmployee']);
Route::get('/uniondata', [EmployeeController::class, 'uniondata']);
Route::get('/when', [EmployeeController::class, 'whenData']);
Route::get('/chunk', [EmployeeController::class, 'chunkData']);






