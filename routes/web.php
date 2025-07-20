<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [UserController::class, 'showUser'])->name('home');
Route::get('/user/{id}', [UserController::class, 'showSingleUser'])->name('view.user');
Route::get('/add', [UserController::class, 'addUser']);
Route::get('/update', [UserController::class, 'updateUser']);


Route::get('/delete/{id}', [UserController::class, 'deleteUser'])->name('delete.user');
Route::get('/deletuser', [UserController::class, 'deleteAllUser']);




