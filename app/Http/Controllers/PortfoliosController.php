<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Portfolio;
//use Illuminate\Http\UploadedFile;
//use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;

class PortfoliosController extends controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct($uri)
    {

    	// $this->middleware('auth');
        
    }
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function index(){

        $logo_files = Storage::allFiles(storage_path(). '/logos/');
		return view('portfolios/index')->with('logo_files', $logo_files);
		
	}

    public function create()
    {
        return view('portfolios/create');
    }


	public function store(Request $request){
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

    public function show($id)
    {

        $portfolio = DB::table('Portfolios')->where('id', $id)->first();
        return view('portfolios/show')->with('portfolio', $portfolio);

    }


}