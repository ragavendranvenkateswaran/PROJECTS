<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/dashboard1',function(){
    return "this is a admin page";
})->middleware(["auth","admin"]);

Route::get('/unautherized',function(){
    return "Your not a admin";
});
