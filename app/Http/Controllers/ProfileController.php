<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class ProfileController extends Controller
{
    //


	public function show($id)
	{

		$user = Auth::user();

		//$userName = DB::user->
		//$profile = DB::table('profiles')->get();
		//dd($user);
		$profile = DB::table('profiles')->where('id', $id)->first();
		//dd($profile);

		//return view('profile.show', compact('profile'));

		return view('profile.show', compact('profile'));

	}

	public function edit($id)
	{

		$user = Auth::user();

		$profile = DB::table('profiles')->where('id', $id)->first();

		return view('profile.edit', compact('user', 'profile'));

	}

}
