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

//General Routes
Route::get('/', 'App\Http\Controllers\ClientController@index')->name('home');

//Client's routes
Route::get('/create', 'App\Http\Controllers\ClientController@create')->name('create');
Route::get('/show/{id}', 'App\Http\Controllers\ClientController@show')->name('show');
Route::get('/edit/{id}', 'App\Http\Controllers\ClientController@edit')->name('edit');
Route::get('/delete/{client}', 'App\Http\Controllers\ClientController@destroy')->name('destroy');
Route::post('/create/store', 'App\Http\Controllers\ClientController@store')->name('store');
Route::put('/create/update/{client}', 'App\Http\Controllers\ClientController@update')->name('update');

//Address's routes

Route::get('/create_address/{id}', 'App\Http\Controllers\AddressController@create')->name('create_address');
Route::get('/edit_address/{id}', 'App\Http\Controllers\AddressController@edit')->name('edit_address');
Route::get('/delete_address/{address}', 'App\Http\Controllers\AddressController@destroy')->name('destroy_address');
Route::post('/create_address/store', 'App\Http\Controllers\AddressController@store')->name('store_address');
Route::put('/create_address/update/{address}', 'App\Http\Controllers\AddressController@update')->name('update_address');

