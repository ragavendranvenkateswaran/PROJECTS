<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authenticationController;

Route::get('/', function () {
    return view('welcome');
})->middleware("auth");

Route::get('/register',[authenticationController::class,'index']);
Route::post('/register',[authenticationController::class,'register']);
Route::get('/login',[authenticationController::class,'loginform'])->name("login");
Route::post('/login',[authenticationController::class,'login']);

Route::get('/vel1',function(){
    return view("welcome");
});