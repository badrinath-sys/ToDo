<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[StudentController::class,'index']);
Route::get('/students',[StudentController::class,'create'])->name('student.create');
Route::post('/students',[StudentController::class,'store'])->name('student.store');

Route::get('/student.update/{id}',[StudentController::class,'edit']);
Route::post('/student.update/{id}',[StudentController::class,'update']);
Route::get('/student.delete/{id}',[StudentController::class,'delete']);