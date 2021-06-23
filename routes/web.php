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

Route::get('/', 'App\Http\Controllers\ClientController@index')->name('home');
Route::get('/show/{id}', 'App\Http\Controllers\ClientController@show')->name('show');
Route::get('/create', 'App\Http\Controllers\ClientController@create')->name('create');
Route::post('/create/store', 'App\Http\Controllers\ClientController@store')->name('store');
Route::get('/delete/{id}', 'App\Http\Controllers\ClientController@destroy')->name('destroy');
