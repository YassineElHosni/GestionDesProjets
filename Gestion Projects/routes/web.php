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
Auth::routes();

Route::get('/', 'HomeController@index');

Route::resource('Projects','ProjectController');
Route::resource('Tasks','TaskController');

Route::match(['PUT', 'PATCH'], '/Tasks/{id}/save','TaskController@updateProgress')->name('Tasks.updateProgress');


?>
