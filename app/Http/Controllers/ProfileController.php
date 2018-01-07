<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class ProfileController extends Controller
{
    //


	public function show()
	{

		$user = Auth::user();

		//$userName = DB::user->
		//$profile = DB::table('profiles')->get();
		//dd($user);
		$profile = DB::table('profiles')->where('id', '1')->first();
		//dd($profile);

		//return view('profile.show', compact('profile'));

		return view('profile.show', compact('profile'));

	}

	public function edit()
	{

		$user = Auth::user();

		$profile = DB::table('profiles')->where('id', '1')->first();

		return view('profile.edit', compact('user', 'profile'));




	}

}
