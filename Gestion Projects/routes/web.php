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
	// dd(Notifications::find('5df53945-a7d6-4fcf-9149-09b913487198'));

	// $u = \App\User::find(25);$t = \App\Task::find(1);
	// Notification::send($u, new \App\Notifications\UserNotification($t));

	// $t = \App\Task::find(1);
	// $p = \App\Project::find(1);
	// dd(get_class($p));
	// if ($p instanceof \App\Task) {
	// 	dd('it is a task');
	// }else if ($p instanceof \App\Project) {
	// 	dd('it is a project');
	// }else dd('error');

	// dd(App\User::whereIn('role',array('ADMIN','MANAGER'))->get());
	// echo Auth::user()->Notifications;
	// $user = \App\User::find(1);
	// $task = \App\Task::find(4);



// $date1 = Carbon\Carbon::createMidnightDate(2018, 8, 1);
// $date2 = Carbon\Carbon::createMidnightDate(2018, 8, 31);

// echo $date1->diffInDays($date2).' ';                   // 30
// echo $date1->diffInWeekdays($date2).' ';               // 22
// echo $date1->diffInWeekendDays($date2).' ';            // 8
// echo $date1->diffInWeeks($date2).' ';                  // 4
// echo $date1->diffInMonths($date2).' ';                 // 0
// echo $date1->diffInYears($date2).' ';                  // 0

// 	$task = \App\Task::find(1);

// 	$from = Carbon\Carbon::parse('2016-01-01 00:00:00');
// 	$to = Carbon\Carbon::parse('2016-02-01 00:00:00');
// 	echo date_diff(new DateTime('2016-01-01 00:00:00'), new DateTime('2016-02-01 00:00:00'))->format('%y year(s) %m month(s) %d day(s) %h hour(s) %i minute(s) %s second(s)');

// 	echo $to->diffInWeekdays($from);

	// $task = \App\Task::find(1);
	// $from = Carbon\Carbon::parse('2018-08-20 00:00:00');
	// $to = Carbon\Carbon::now();

	// dd($to->diffInWeekdays($from),date_diff($task->created_at,$task->updated_at)->format('%y year(s) %m month(s) %d day(s) %h hour(s) %i minute(s) %s second(s)'));

	// Notification::send(Auth::user(), new \App\Notifications\UserNotification($task));
	// $task = \App\Task::find(2);
	// Notification::send(Auth::user(), new \App\Notifications\UserNotification($task));
	// $task = \App\Task::find(3);
	// Notification::send(Auth::user(), new \App\Notifications\UserNotification($task));
	// $task = \App\Task::find(4);
	// Notification::send(Auth::user(), new \App\Notifications\UserNotification($task));
	// $task = \App\Task::find(6);
	// Notification::send(Auth::user(), new \App\Notifications\UserNotification($task));

	// Notification::send($user, new \App\Notifications\UserNotification($task));

	// foreach ($user->unreadNotifications  as $notification) {
	//     echo $notification->notifiable_id;
	//     echo $notification->data['title'];
	//     // $notification->markAsRead();
	// }
});
Route::get('/user/notif/seen/{data}','HomeController@notifSeen')->name('user.notif.seen');
Route::get('/admin/register', 'HomeController@adminRegisterIndex')->name('admin.register.index');
Route::post('/admin/register/save', 'HomeController@firstAdminStore')->name('admin.register.save');

Route::get('/register', 'UserController@registerIndex')->name('register.index');
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
