<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('tests', TestController::class);

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/students/create',[StudentController::class, 'create'])->name('students.create');


Route::post('/students', [StudentController::class, 'store'])->name('students.store');
