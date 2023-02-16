<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('adminpanel')->group(function(){

Route::get('/',[AdminController::class,'index']);
Route::get('/dashboard',function(){return 'Admin dashboard';});
Route::get('/users',function(){return 'Admin users';});
Route::get('/statistics',function(){return 'Admin statistics';});
Route::get('/courses',function(){return 'Admin courses';});
Route::get('/registeration',function(){return 'Admin registeration';});
});

