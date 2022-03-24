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
    return view('home');
});

Route::get('/paradigma-dan-prinsip-usability', function () {
    return view('paradigma-dan-prinsip-usability');
});

Route::get('/interaksi-manusia-dan-komputer', function () {
    return view('interaksi-manusia-dan-komputer');
});
