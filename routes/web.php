<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('about us');
});

Route::get('/', function () {
    return view('contact us');
});

Route::get('/', function () {
    return view('services');
});

route::get('User',[UserController::class,'Index']);
route::get('User/create',[UserController::class,'create']);
route::get('User/',[UserController::class,'store']);
route::get('User/id',[UserController::class,'show']);
route::get('User/{id}/edit',[UserController::class,'edit']);
route::get('User/id',[UserController::class,'update']);
route::get('User/id',[UserController::class,'destroy']);