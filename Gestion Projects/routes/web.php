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

Route::get('/Projet/create2',function (){
	return view('projets.create2');
});

Route::resource('Projets','ProjetController');
Route::get('/Tache','TacheController@index');

Route::resource('Projet','ProjetController');



?>