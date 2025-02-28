<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/students/create',[StudentController::class, 'create'])->name('students.create');


Route::post('/students', [StudentController::class, 'store'])->name('students.store');
