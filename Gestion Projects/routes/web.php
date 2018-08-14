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

Route::get('/', 'HomeController@index')->name('home.index');

Route::resource('Projects','ProjectController');
Route::resource('Tasks','TaskController');

Route::get('/{id}/myProjects','ProjectController@ManagerProjets')->name('Project.ManagerProjets');

Route::match(['PUT', 'PATCH'],'/Tasks/{id}/save','TaskController@updateProgress')->name('Tasks.updateProgress');
//Route::match(['PUT', 'PATCH'], '/Tasks/{id}/add/{empid}',)->name('Tasks.addEmployee');
Route::get('Tasks/delete/{id}/{empid}','TaskController@deleteEmployee')->name('Tasks.deleteEmployee');
Route::get('Tasks/add/{id}/{empid}','TaskController@addEmployee')->name('Tasks.addEmployee');

Route::get('/{id}/myTasks','TaskController@MyTasks')->name('Tasks.MyTasks');

Route::resource('Clients','ClientController');
Route::resource('Users','UserController');
Route::get('User/editPassword','UserController@editPassword')->name('User.editPassword');
Route::match(['PUT', 'PATCH'],'User/updatePassword','UserController@updatePassword')->name('User.updatePassword');


Route::get('/profile/{id}','UserController@showprofile')->name('User.profile');
Route::post('/profile/{userID}','UserController@update_avatar')->name('User.updateAvatar');

Route::get('datatables/{name}', 'HomeController@index2')->name('datatables');
Route::get('datatables/getdata/{name}', 'HomeController@getData')->name('datatables.getdata');

Route::get('ajaxdata/removedata/{name}', 'HomeController@removedata')->name('datatables.removedata');
Route::get('ajaxdata/massremove/{name}', 'HomeController@massremove')->name('datatables.massremove');

?>
