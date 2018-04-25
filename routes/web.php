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
//comment is more comment
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

//users
Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::post('/users/store', 'UsersController@store')->name('users.store');
Route::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
Route::post('/users/{id}', 'UsersController@update')->name('users.update');
Route::get('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');

//systems
Route::get('/systems/edit/{id}', 'SystemsController@edit')->name('systems.edit');
Route::post('/systems/{id}', 'SystemsController@update')->name('systems.update');
Route::get('/systems/destroy/{id}', 'SystemsController@destroy')->name('systems.destroy');

//rooms
Route::get('/rooms', 'RoomsController@index')->name('rooms.index');
Route::get('/rooms/create', 'RoomsController@create')->name('rooms.create');
Route::get('/rooms/edit/{id}', 'RoomsController@edit')->name('rooms.edit');
Route::post('/rooms/store', 'RoomsController@store')->name('rooms.store');
Route::post('/rooms/{id}', 'RoomsController@update')->name('rooms.update');
Route::get('/rooms/destroy/{id}', 'RoomsController@destroy')->name('rooms.destroy');

//Plant Types
Route::get('/planttypes', 'PlantTypesController@index')->name('planttypes.index');
Route::get('/planttypes/create', 'PlantTypesController@create')->name('planttypes.create');
Route::get('/planttypes/edit/{id}', 'PlantTypesController@edit')->name('planttypes.edit');
Route::post('/planttypes/store', 'PlantTypesController@store')->name('planttypes.store');
Route::post('/planttypes/{id}', 'PlantTypesController@update')->name('planttypes.update');
Route::get('/planttypes/destroy/{id}', 'PlantTypesController@destroy')->name('planttypes.destroy');

//Plants
Route::get('/plants', 'PlantsController@index')->name('plants.index');
Route::get('/plants/create', 'PlantsController@create')->name('plants.create');
Route::get('/plants/edit/{id}', 'PlantsController@edit')->name('plants.edit');
Route::post('/plants/store', 'PlantsController@store')->name('plants.store');
Route::post('/plants/{id}', 'PlantsController@update')->name('plants.update');
Route::get('/plants/destroy/{id}', 'PlantsController@destroy')->name('plants.destroy');

//Notes