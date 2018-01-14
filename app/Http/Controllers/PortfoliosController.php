<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Portfolio;
//use Illuminate\Http\UploadedFile;
//use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
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

        //$logo_filesをファイル名だけに置換
        $users = DB::table('users')->get();
        $category = Input::get('category');

        if(isset($category)){
            $count = DB::table('portfolios')->where('category', $category)->count();
            $portfolios = DB::table('portfolios')->where('category', $category)->get();
        }else{
            $count = DB::table('portfolios')->where('category', $category)->count();
            $portfolios = DB::table('portfolios')->get();
        }

            if($count == 0){
                $message = 'Sorry! Portfolio of ' . $category . ' category was note posted.';
                return view('portfolios/index', ['portfolios' => $portfolios, 'users' => $users])->with('message', $message);
            }else{
                return view('portfolios/index', ['portfolios' => $portfolios, 'users' => $users]);
               
            }

	}

    public function create()
    {
        $this->middleware('auth');
        return view('portfolios/create');
    }


	public function store(Request $request){
        $this->middleware('auth');
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

        $portfolio = DB::table('portfolios')->where('id', $id)->first();
        return view('portfolios/show')->with('portfolio', $portfolio);
    }


}