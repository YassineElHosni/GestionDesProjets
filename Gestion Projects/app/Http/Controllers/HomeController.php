<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//
use Auth;// to get the currently connected user notifications list.
use App\User;
//
use App\Project;
use App\Task;
use App\Client;
//
use Yajra\Datatables\Datatables;// datatables.

class HomeController extends Controller
{
/////////////////////////// First Admin Registration ///////////////////////////
	//
	//  check if the database of users is empty.
	//
	public function CheckFirstRegistration(){
		return (User::where('role','like','ADMIN')->count() == 0);//true -> empty ;; false -> full
	}
	//
	// returns the admin first registration page.
	//
	public function adminRegisterIndex(){
		if((Auth::guest() && $this->CheckFirstRegistration()) || (!Auth::guest() && auth::user()->role == 'ADMIN'))
			return view('AdminRegistration');
		else return redirect()->route('home.index');
	}
	//
	// create the first admin user account.
	//
	public function firstAdminStore(Request $request){
		$this->validate($request, [
			'name' => 'required|min:3|max:50',
			'email' => 'email',
			'comment' => 'required',
			'password' => 'required|confirmed|min:6',
		]);
		//if ($validator->fails()) The given data did not pass validation
		$u = new User([
			'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password),
			'role' => 'ADMIN',
			'comment' => $request->comment,
		]);

		$u->save();

		return  redirect()->route('login');
	}
/////////////////////////////  ///////////////////  //////////////////////////

//////////////////////////////// Home page ////////////////////////////////////
	//
	// returns home page index.
	//
	public function index(){
		if(!Auth::guest()){
			$ps=Project::orderBy('updated_at', 'ASC')
				->where('state','=',1)
				->take(3)
				->get(['id', 'title', 'state', 'updated_at']);

			$ts=Task::orderByRaw('priority - updated_at', 'ASC')
				->where('state','like','IN_PROGRESS')
				->take(3)
				->get(['id', 'title', 'state', 'priority', 'updated_at']);

			return view('index')->with('LastFewProjects',$ps)
				->with('LastFewTasks',$ts);
		}else if($this->CheckFirstRegistration())
				return redirect()->route('admin.register.index');
			else return  redirect()->route('login');
	}
/////////////////////////////  ///////////////////  //////////////////////////

/////////////////////////////// Notification ///////////////////////////////////
	//
	// set a notification read_at to the current date.
	//
	public function notifSeen($notifId){
		$user = Auth::user();
		$notif =  $user->Notifications
			->where('id','=',$notifId)[0];

		$objectId = $notif['data']['id'];
		$istype =  $notif['data']['type'];

		$notif->markAsRead();

		if($istype == 'App\Task'){
			return redirect()->route('Tasks.show', $objectId);
		}
		else if($istype == 'App\Project'){
			return redirect()->route('Projects.show', $objectId);
		}
		else{
			flash('Objet non Trouvé !')->error();
			return back();
		}
	}
/////////////////////////////  ///////////////////  //////////////////////////

//////////////////////////////// DataTables ////////////////////////////////////
	//
	// return all possible columns.
	//
	public static function All_Cols(){
		return [    'Projects'  =>['id', 'title', 'description'],
			'Tasks'     =>['id', 'title', 'state'],
			'Clients'   =>['id', 'name', 'email'],
			'Users'     =>['id', 'name', 'email']
		];
	}
	//
	// DataTables index.
	//
	public function index2($name){
		return view('welcome')
			->withCurrent($name)
			->withCols(array_slice(HomeController::All_Cols()[$name], 1));
	}
	//
	// get data from the database to display on the dataTable.
	//
	public function getData($name){
		$GLOBALS['cName'] = $name;
		$vals=HomeController::All_Cols()[$name];
		switch($name)
		{
			case 'Projects' :
				$obj = Project::select($vals);
				break;
			case 'Tasks' :
				$obj = Task::select($vals);
				break;
			case 'Clients' :
				$obj = Client::select($vals);
				break;
			case 'Users' :
				$obj = User::select($vals);
				break;

			default :
				flash('Nothing Happened !')->warning();
				return back();
		}
		return Datatables::of($obj)->make(true);
	}
	//
	// remove an object from the database.
	//
	public function removedata(Request $request, $name){
		switch($name)
		{
			case 'Projects' :
				$obj = Project::find($request->input('id'));
				break;
			case 'Tasks' :
				$obj = Task::find($request->input('id'));
				break;
			case 'Clients' :
				$obj = Client::find($request->input('id'));
				break;
			case 'Users' :
				$obj = User::find($request->input('id'));
				break;

			default :
				return back()->with('message', 'nothing happened!');
		}

		if($obj->delete())
		{
			return back()->with('message', 'Data Deleted '.$request->input('id'));
		}
		return back()->with('message', 'nothing happened!!');
	}
	//
	// remove multiple objects from the database.
	//
	public function massremove(Request $request, $name){
		switch($name)
		{
			case 'Projects' :
				$obj = Project::whereIn('id', $request->input('id'));
				break;
			case 'Tasks' :
				$obj = Task::whereIn('id', $request->input('id'));
				break;
			case 'Clients' :
				$obj = Client::whereIn('id', $request->input('id'));
				break;
			case 'Users' :
				$obj = User::whereIn('id', $request->input('id'));
				break;

			default :
				return back()->with('message', 'nothing happened!');
		}
		if($obj->delete())
		{ 
			flash('Data Deleted Successfully !')->success();
			return back();
		}

		flash('Nothing happened !')->success();
		return back();
	}
/////////////////////////////  ///////////////////  //////////////////////////
}