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
//comment
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

/*
localhost:8000/user/1

Route::get('/users/{id}', function () {
    return view('users');
});
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index')->name('users');
