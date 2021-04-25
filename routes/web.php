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

// Route::get('/', 'app/Http/Controllers/ViewController@index');

Route::get('/', function () {
    return view('index');
});

Route::view('student-list', 'student-list');
Route::post('submit', 'StudentController@saveStudent');
Route::get('student-list', 'StudentController@retrieveStudent');
