<?php

use Illuminate\Support\Facades\Route;

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


// Create routes that the user navigate in this page

// /                 Redirect to index
// /user         Redirect to users page
// /about       Redirect to about
// /supervisor
// /employee     This route should redirect also to users page

Route::get('/', function () {
    return view('activity1.index');
});
Route::get('/user', function () {
    return view('activity1.user');
});
Route::get('/about', function () {
    return view('activity1.about');
});
Route::get('/employee', function () {
    return view('activity1.user');
});
