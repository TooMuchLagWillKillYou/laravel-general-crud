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

Route::get('/', 'MyController@home')->name('home');

Route::get('/matches/{id}', 'MyCOntroller@show')->name('show');

Route::get('/create', 'MyController@create')->name('create');
Route::post('/store', 'MyController@store')->name('store');

Route::get('/edit/{id}', 'MyController@edit')->name('edit');
Route::post('/update/{id}', 'MyController@update')->name('update');

Route::get('/destroy/{id}', 'MyController@destroy')->name('destroy');