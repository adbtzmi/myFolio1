<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/mainpage', function () {
    return view('mainpage');
});

Route::get('/add-student', function () {
    return view('add-student');
});

Route::resource('student', StudentsController::class);

Route::get('/student', [StudentsController::class, 'index'])->name('students.index');

Route::delete('/student/{matric_id}', [StudentsController::class, 'destroy'])->name('student.destroy');


