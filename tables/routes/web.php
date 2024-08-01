<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\designationController;
use App\Http\Controllers\employeeController;

Route::get('/', function () {
    return view('welcome');

});
    Route::get('/department/create',[departmentController::class,"create"]);
Route::post('/department',[departmentController::class,"store"]);
Route::get('/designation/create',[designationController::class,"create"]);
Route::post('/desgination',[designationController::class,"store"]);
Route::get('/designation/{id}',[designationController::class,"getDesignation"]);
Route::get('/employee/create',[employeecontroller::class,"create"]);
Route::post('/employee',[employeecontroller::class,"store"]);
 