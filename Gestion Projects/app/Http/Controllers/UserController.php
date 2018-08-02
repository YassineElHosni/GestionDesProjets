<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
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
		$u->password = $request->password;
		$u->role = $request->role;
		$u->comment = $request->comment;

		$u->save();

		return route('Users.index');
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
