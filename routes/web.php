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
    return view('welcome');
});

Route::get('/Hello World', function () {
    return "<h1>Hello World</h1>";
});

Route::get('/contatti', function () {
    return "<h4>contatti</h4>";
});

Route::get('/link', function () {
    return "<h4>link</h4>";
});



