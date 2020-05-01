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

// Route::get('/customers', 'CustomersController@index');
// Route::get('/customers/{id}', 'CustomersController@edit');

Route::resource('/customers', 'CustomersController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
