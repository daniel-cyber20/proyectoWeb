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
    return view('auth.login');
});
//Route::get('/cines', 'CineController@index');
//Route::get('/cines/create', 'CineController@create');

Route::resource('cines', 'CineController')->middleware('auth');
Auth::routes();

Route::get('/home', 'CineController@index')->name('home');
