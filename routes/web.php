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

//splash page
Route::get('/', function () {
    return view('welcome');
});

//transaction routes
Route::Resource('transaction', 'TransactionController');

//user routes
Route::Resource('user', 'UserController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
