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
    return 'test';
});

Route::get('/home', function(){
	return "laravel5";
});
//Route::get('/test','TacheController@index');
Route::resource('/User','UserController');
Route::resource('/Projet','ProjetController');
Route::resource('/Tache','TacheController');
Route::resource('/Client','ClientController');
?>
