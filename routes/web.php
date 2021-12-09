<?php

use App\Http\Controllers\PullController;
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


Route::get('/',[PullController::class, 'getStudent'])->name('filter');
Route::post('/create_student',[PullController::class, 'createStudent'])->name('createStudent');
Route::post('/update_student/{id}',[PullController::class, 'updateStudent'])->name('updateStudent');
Route::get('/edit/{id}',[PullController::class, 'editStudent'])->name('editStudent');
Route::get('/delete/{id}',[PullController::class, 'deleteStudent'])->name('deleteStudent');






