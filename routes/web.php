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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('tasks')->middleware('auth')->group(function(){

Route::get('/', 'TaskController@index');

Route::get('/create', 'TaskController@create');

Route::post('/', 'TaskController@store');

Route::get('/{task}', 'TaskController@show');

Route::get('/{task}/edit', 'TaskController@edit');

Route::put('/{task}', 'TaskController@update');

Route::delete('/{task}', 'TaskController@destory');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
