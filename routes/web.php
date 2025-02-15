<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\StudentController;
 use App\Http\Controllers\EmployeeController;
 use App\Http\Controller\DepartmentController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function(){
    return view('admin');
});
//Route::get('/user',[Student])
Route::get('/user', function(){
    return view('user');
});
//Auth::routes();

Route::resource('employee', EmployeeController::class);
Route::resource('department', DepartmentController::class);

//Route::get('/admin/welcome',[AdminController::class,'usercheck']);