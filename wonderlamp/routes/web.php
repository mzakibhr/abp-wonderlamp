<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/pulaupahawang', function () {
    return view('content/pulaupahawang');
});
Route::get('/waykambas', function () {
    return view('content/waykambas');
});
Route::get('/gigihiu', function () {
    return view('content/gigihiu');
});
Route::get('/curupgangsa', function () {
    return view('content/curupgangsa');
});
Route::get('/gunungpesagi', function () {
    return view('content/gunungpesagi');
});
Route::get('/telukkilauan', function () {
    return view('content/telukkilauan');
});
Route::get('/pantaitanjung', function () {
    return view('content/pantaitanjung');
});
Route::get('/danauranau', function () {
    return view('content/danauranau');
});
