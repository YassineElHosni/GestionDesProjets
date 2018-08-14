<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;//added
use App\Http\Controllers\Controller;
use Session;
use Auth;
use App\User;
use App\Task;
use App\Task_User;
class UserController extends Controller
{

	public function __construct(){
   /*allow guest to change his password */
	 /*allow all users to update their profil avatar only*/
	 /*only admin have access to all users database*/
	 /*only Gerant & Admin can add users ..(Admin add Gerant) */
  	$this->middleware('admin',['except' => ['showprofile','update_avatar','update','editPassword','updatePassword']]);

	}

	public function showprofile($id){

$user=User::find($id);
   return view('Users.show',compact('user'))/*->withUser($user)*/;

	}

	public function update_avatar(Request $request,$id){

		$this->validate($request, [
		 'avatar'  => 'required|mimes:jpg,jpeg,png'
     ]);
			$image =$request->file('avatar');
			$new_image = rand() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('storage/avatars'), $new_image);/*put image in storage folder*/

			$user=User::find($id);
			$user->avatar=$new_image;
			$user->save();

		 return back()->with('success', 'Image Uploaded Successfully')->with('user', $user);

		/*
		 $this->validate($request, [
		  'avatar'  => 'required|image|mimes:jpg,png,gif|max:2048'
		]);*/
   }

	/**
		* Display a listing of the resource.
		*
		* @return \Illuminate\Http\Response
		*/
	public function index()
	{
		$us = User::all();
		$u = Auth::user();
		
		return view('Users.index')->withUsers($us)->withUser($u);
	}

	/**
		* Show the form for creating a new resource.
		*
		* @return \Illuminate\Http\Response
		*/
	public function create()
	{
		flash('User Created Successfully !')->success();
		return view('auth.register');
	}
/*storeAdmin(){
	admin role
}*/
	/**
		* Store a newly created resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @return \Illuminate\Http\Response
		*/
	public function store(Request $request)
	{
		$u = new User([
			'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password),
			'role' => $request->role,
			'comment' => $request->comment,
		]);
		// dd($request->all(),$u);
		$u->save();

		flash('User Created Successfully !')->success();
		return redirect()->route('Users.index');
	}

	/**
		* Display the specified resource.
		*
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
	public function show($id)
	{
		$u = User::find($id);
		return view('Users.show')->withUser($u);
	}

	/**
		* Show the form for editing the specified resource.
		*
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
	public function edit($id)
	{
		$u = User::find($id);
			return view('Users.edit')->withUser($u);
	}
	/*
	 *  form to edit your password
	*/
	public function editPassword()
	{

			return view('Mail.edit_Password');
	}
	/*
	* modifierpassword
	*/
	public function updatePassword(Request $request)
	{

			$u = User::where('email','=',$request->email)->first();
		$u->password = bcrypt($request->password);

		$u->save();

    flash('Mot de passe modifié Veuillez vous connecté !')->success();
	  return	redirect()->route('login');
	}
	/**
		* Update the specified resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
	public function update(Request $request, $id)
	{

			$u = User::find($id);


		$u->name = $request->name;
		$u->email = $request->email;
		$u->role = $request->role;/*attribuer new role*/
		$u->password = $request->password;

		$u->comment = $request->comment;

		$u->save();

		return redirect()->route('Users.index');
	}

	/**
		* Remove the specified resource from storage.
		*
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
	public function destroy($id)
	{
		$u = User::find($id);
    if($u->role=='EMPLOYEE'){/*detache tasks from that user employee*/
			$tasks_id=Task_User::where('user_id',$u->id)->get(['task_id']);
			$tasks=Task::whereIn('id',$tasks_id)->get();
			foreach($tasks as $task){

			}
		}
		$u->delete();

		flash('User Deleted Successfully !')->warning();
		return redirect()->route('Users.index');
	}
}
