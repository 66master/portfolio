<?php

namespace App\Http\Controllers;

use App\Portfolio;
use DB;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $logo_files = Storage::files('/public/logos');

        $logo_files = str_replace('public/logos', 'storage/logos', $logo_files);


        //$logo_filesをファイル名だけに置換

        $portfolios = DB::table('portfolios')->get();
        return view('home', ['portfolios' => $portfolios])->with('logo_files', $logo_files);

    }
}
