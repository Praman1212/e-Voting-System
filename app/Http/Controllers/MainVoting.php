<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainVoting extends Controller
{
    public function voting()
    {
        return view('user.voting');    
    }
    public function profile(){
        return view('user.profile');
    }
    public function details(){
        return view('user.detail');
    }
    public function setting(){
        return view('user.setting');
    }
    public function aboutus(){
        return view('user.about-us');
    }
}
