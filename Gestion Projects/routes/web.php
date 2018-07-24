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
Route::get('/', function () {
    return 'test';
});

Route::get('/test', function(){
	return "laravel5";
});

Route::resource('Projets','ProjetController');
Route::get('/Tache','TacheController@index');

Route::resource('Projet','ProjetController');

Auth::routes();





?>

