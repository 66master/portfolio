<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('auth');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function index(){

		return view('users/index');
		
	}


	public function post(Request $request){

        $imageUrl;
        $category;
        $type;
        $title;
        $description;

        $imageUrl = $request->image;
        $category = $request->category;
        $type = $request->type;
        $title = $request->title;
        $description = $request->description;


        

        

		


	}


}