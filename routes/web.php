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
Route::get('/test','\App\Http\Controllers\UserController@index');
Route::get('/add_bestellung','\App\Http\Controllers\BestellerC@index');
Route::get('/show_bestellungen','\App\Http\Controllers\BestellerC@index');
Route::get('/show_bestellungen/{id}','\App\Http\Controllers\BestellerC@index');
