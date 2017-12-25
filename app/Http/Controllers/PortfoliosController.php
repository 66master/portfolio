<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\UploadedFile;
use Auth;
use App\Portfolio;
use Illuminate\Filesystem\Filesystem;

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

        $user = Auth::user();
        $image_file = $request->file('image');

        //dd($request->file('image'));

        $portfolio = new Portfolio;

        //$post = $request->all();

        if($request->hasFile('image')){
            $portfolio->image = $request->file('image')->store('public/images');
            $portfolio->image = basename($portfolio->image);
        }else{
            return redirect('portfolios')->with('error_message', '画像ファイルの送信に失敗しました。');
        }

        $portfolio->user_id = $user->id;
        $portfolio->category = $request->category;
        $portfolio->type = $request->type;
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;

        $portfolio->save();
            return redirect('portfolios')->with('success_message', 'データベースへ保存しました。');
	}


}