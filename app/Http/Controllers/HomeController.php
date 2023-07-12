<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $check=DB::table('role_user')->where('user_id',Auth::user()->id)->first();
        if ($check->role_id==1){
            return view('home');
        }
        else {
            return "user";
        }
    }
}
