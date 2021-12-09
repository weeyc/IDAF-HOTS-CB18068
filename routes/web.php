<?php

use App\Http\Controllers\Controller_CB18068;
use Illuminate\Support\Facades\Route;

Route::get('/',[Controller_CB18068::class, 'getStudent'])->name('retrieveStudent');
Route::post('/create_student',[Controller_CB18068::class, 'createStudent'])->name('createStudent');
Route::get('/delete/{id}',[Controller_CB18068::class, 'deleteStudent'])->name('deleteStudent');






