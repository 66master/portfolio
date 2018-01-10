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

		$profile = \App\Profile::find($id);

		return view('profile.show', compact('profile'));

	}

	public function edit($id)
	{

		$user = Auth::user();

		$profile = DB::table('profiles')->where('id', $id)->first();

		return view('profile.edit', compact('user', 'profile'));

	}

}
