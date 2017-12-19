<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfoliosController extends controller
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

		return view('portfolios/index');
		
	}


	public function post(Request $request){

        $portfolio = new Portfolio;


        //$post = $request->all();


        if($request->hasFile('image')){
            $portfolio->imageUrl = $request->image->store(storage_path().'images');
        }else{
            return view('portfolios/index')->with('message', '送信に失敗しました');
        }
        $portfolio->category = $request->category;
        $portfolio->type = $request->type;
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;

        $portfolio->save();
	}


}