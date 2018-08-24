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

Route::get('notif', function(){
	// echo Auth::user()->Notifications;
	// $user = \App\User::find(1);
	// $task = \App\Task::find(4);
	$task = \App\Task::find(6);
	Notification::send(Auth::user(), new \App\Notifications\UserNotification($task));
	// Notification::send($user, new \App\Notifications\UserNotification($task));

	// foreach ($user->unreadNotifications  as $notification) {
	//     echo $notification->notifiable_id;
	//     echo $notification->data['title'];
	//     // $notification->markAsRead();
	// }
});
Route::get('/user/notif/seen/{id}/{data}','HomeController@notifSeen')->name('user.notif.seen');
Route::get('/admin/register', 'HomeController@adminRegisterIndex')->name('admin.register.index');
Route::post('/admin/register/save', 'HomeController@firstAdminStore')->name('admin.register.save');

Route::get('/register', 'HomeController@registerIndex')->name('register.index');
Route::get('/register/save', 'UserController@store')->name('register.save');

Route::get('/', 'HomeController@index')->name('home.index');

Route::resource('Projects','ProjectController');
Route::resource('Tasks','TaskController');

Route::get('/{id}/myProjects','ProjectController@ManagerProjets')->name('Project.ManagerProjets');

Route::match(['PUT', 'PATCH'],'/Tasks/{id}/save','TaskController@updateProgress')->name('Tasks.updateProgress');
//Route::match(['PUT', 'PATCH'], '/Tasks/{id}/add/{empid}',)->name('Tasks.addEmployee');
Route::get('Tasks/delete/{id}/{empid}','TaskController@deleteEmployee')->name('Tasks.deleteEmployee');
Route::get('Tasks/add/{id}/{empid}','TaskController@addEmployee')->name('Tasks.addEmployee');

Route::get('/{id}/myTasks','TaskController@MyTasks')->name('Tasks.MyTasks');
Route::get('/addTask/{id_proj}','TaskController@addTaskToPrj')->name('Tasks.addTaskToPrj');/* ~~ */

Route::resource('Clients','ClientController');
Route::resource('Users','UserController');
Route::get('User/editPassword','UserController@editPassword')->name('User.editPassword');
Route::match(['PUT', 'PATCH'],'User/updatePassword','UserController@updatePassword')->name('User.updatePassword');


Route::get('/Userprofile/{id}','UserController@showProfile')->name('User.Profile');
Route::post('/profile/{userID}','UserController@update_avatar')->name('User.updateAvatar');

Route::get('datatables/{name}', 'HomeController@index2')->name('datatables');
Route::get('datatables/getdata/{name}', 'HomeController@getData')->name('datatables.getdata');

// Route::get('ajaxdata/removedata/{name}', 'HomeController@removedata')->name('datatables.removedata');
Route::get('ajaxdata/massremove/{name}', 'HomeController@massremove')->name('datatables.massremove');
Route::get('calendar','CalendarController@index')->name('calendar.index');
Route::post('calendar','CalendarController@addProject')->name('calendar.addProject');
?>
