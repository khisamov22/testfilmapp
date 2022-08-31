<?php

use App\Http\Controllers\maincontroller;
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

Route::get('/', "App\Http\Controllers\MainController@home");
Route::get('/about', "App\Http\Controllers\MainController@about");
Route::get('/add', "App\Http\Controllers\MainController@add")-> name("add");
Route::get('/random', "App\Http\Controllers\MainController@random")-> name("random");
Route::post('/add/check', "App\Http\Controllers\MainController@addchek");

