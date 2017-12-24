<?php

namespace App\Http\Controllers;

use App\Portfolio;
use DB;
use Illuminate\Http\Request;

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

        $portfolios = DB::table('portfolios')->get();
        return view('home', ['portfolios' => $portfolios]);

    }
}
