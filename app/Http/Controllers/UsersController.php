<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

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

        $post = new Post;


        if($request->hasFile('image')){
            $post->imageUrl = $request->image->store(storage_path().'images');
        }else{
            return;
        }
        $post->category = $request->category;
        $post->type = $request->type;
        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();
	}


}