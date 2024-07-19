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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//NEW ROUTES//
Route::get('/players', 'PlayerController@index');
Route::get('/players/create', 'PlayerController@create');
Route::post('/players', 'PlayerController@store');
Route::get('/players/{player}', 'PlayerController@show');
Route::get('/players/{player}/edit', 'PlayerController@edit');
Route::put('/players/{player}', 'PlayerController@update');
Route::delete('/players/{player}', 'PlayerController@destroy');
Route::delete('/deletePlayers/', 'PlayerController@destroyAll');


Route::get('/addresses', 'AddressController@index');
Route::get('/addresses/create', 'AddressController@create');
Route::post('/addresses', 'AddressController@store');
Route::get('/addresses/{address}', 'AddressController@show');
Route::get('/addresses/{address}/edit', 'AddressController@edit');
Route::put('/addresses/{address}', 'AddressController@update');
Route::delete('/addresses/{address}', 'AddressController@destroy');
Route::delete('/deleteAddresses/', 'AddressController@destroyAll');
