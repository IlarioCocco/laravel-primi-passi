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

// Route::get('/', function () {
//     return view('welcome');
// });

// dinamic class with view
Route::get('/hello', function () {
    return view('hello');
});


Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/link', function () {
    return view('link');
});

// debug prove hello world visual li with foreach
Route::get('/', function () {

    $data = [
        "titoli" => [
            "Hello World"
        ]
    ];

    return view('index', $data);
});

