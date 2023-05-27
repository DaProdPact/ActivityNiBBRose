<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::controller(ActivityController::class)->group(function(){

    Route::get('/','index');
    Route::get('/user','user');
    Route::get('/about','about');
    Route::get('/employee','user');

  
  });
