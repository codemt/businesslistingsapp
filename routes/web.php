<?php

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
Route::resource('/listings','ListingsController');
Route::post('/listings/create','ListingsController@store')->name('listings/create');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
