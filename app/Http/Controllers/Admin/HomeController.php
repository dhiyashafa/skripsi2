<?php

namespace App\Http\Controllers\Admin;
use Auth;
use DB;

class HomeController
{
    public function index()
    {
        // dd(Auth::user());
        $check=DB::table('role_user')->where('user_id',Auth::user()->id)->first();
        if ($check->role_id==1){
            return view('home');
        }
        else {
            return view('homeUser');
        }
    }
}
