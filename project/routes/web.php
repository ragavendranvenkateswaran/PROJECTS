<?php
use App\Http\controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create',[StudentController::class,"create"]);
Route::post('/student',[StudentController::class,"add"]);
Route::get('/list',[StudentController::class,"getting"]);
Route::get('/update/{id}',[StudentController::class,"update"]);
Route::post('/updated_data/{id}',[StudentController::class,"updated"]);
Route::get('/delete/{id}',[StudentController::class,"destroy"]);

