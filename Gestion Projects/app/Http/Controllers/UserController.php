<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;//added
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class UserController extends Controller
{

	public function showprofile($id){

$user=User::find($id);
   return view('Users.show',compact('user'))/*->withUser($user)*/;

	}

	public function update_avatar(Request $request,$id){

		 $this->validate($request, [
		  'avatar'  => 'required|image|mimes:jpg,png,gif|max:2048'
		 ]);

		 $image = $request->file('avatar');

		 $new_name = rand() . '.' . $image->getClientOriginalExtension();

		 $image->move(public_path('storage/avatars'), $new_name);
		 /*find the user & add a new image name*/
		 $user=User::find($id);
     $user->avatar=$new_name;
     $user->save();
		 
		 return back()->with('success', 'Image Uploaded Successfully')->with('user', $user);
 }
		// Handle the user upload of avatar
		  /*  	if($request->hasFile('avatar')){
		    		$avatar = $request->file('avatar');
		    		$avatarname = time() . '.' . $avatar->getClientOriginalExtension();
		    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $avatarname ) );

		    		$user =User::find(1); //Auth::user();
		    		$user->avatar = $avatarname;
		    		$user->save();
		    	}
		    	return view('profile', array('user' => Auth::user() );*/
	/**
		* Display a listing of the resource.
		*
		* @return \Illuminate\Http\Response
		*/
	public function index()
	{
		$us = User::all();

		return view('Users.index')->withUsers($us);
	}

	/**
		* Show the form for creating a new resource.
		*
		* @return \Illuminate\Http\Response
		*/
	public function create()
	{
		return view('Users.create');
	}

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
			'password' => $request->password,
			'role' => $request->role,
			'comment' => $request->comment,
		]);
		$u->save();

		flash('User Created Successfully !')->success();
		return route('Users.index');
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

		$u->delete();

		flash('User Deleted Successfully !')->warning();
		return route('Users.index');
	}
}
