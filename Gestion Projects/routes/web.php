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


Route::get('/admin/register', 'HomeController@adminRegisterIndex')->name('admin.register.index');
Route::get('/admin/register/save', 'UserController@store')->name('admin.register.save');

Route::get('/register', 'HomeController@registerIndex')->name('register.index');
Route::get('/register/save', 'UserController@store')->name('register.save');

Route::get('/', 'HomeController@index')->name('home.index');

Route::resource('Projects','ProjectController');
Route::resource('Tasks','TaskController');

Route::match(['PUT', 'PATCH'],'/Tasks/{id}/save','TaskController@updateProgress')->name('Tasks.updateProgress');
//Route::match(['PUT', 'PATCH'], '/Tasks/{id}/add/{empid}',)->name('Tasks.addEmployee');
Route::get('Tasks/delete/{id}/{empid}','TaskController@deleteEmployee')->name('Tasks.deleteEmployee');
Route::get('Tasks/add/{id}/{empid}','TaskController@addEmployee')->name('Tasks.addEmployee');

Route::resource('Clients','ClientController');
Route::resource('Users','UserController');

Route::get('/profile/{id}','UserController@showprofile')->name('User.profile');
Route::post('/profile/{userID}','UserController@update_avatar')->name('User.updateAvatar');

Route::get('datatables/{name}', 'HomeController@index2')->name('datatables');
Route::get('datatables/getdata/{name}', 'HomeController@getData')->name('datatables.getdata');

// Route::get('ajaxdata/removedata/{name}', 'HomeController@removedata')->name('datatables.removedata');
Route::get('ajaxdata/massremove/{name}', 'HomeController@massremove')->name('datatables.massremove');

?>
