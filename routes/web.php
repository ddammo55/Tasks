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

Route::get('/tasks', 'TaskController@index');

Route::get('/create', 'TaskController@create');

Route::post('/tasks', 'TaskController@store');

Route::get('/tasks/{task}', 'TaskController@show');

Route::get('/tasks/{task}/edit', 'TaskController@edit');

Route::put('/tasks/{task}', 'TaskController@update');

Route::delete('/tasks/{task}', 'TaskController@destory');
