<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
//        dd(auth()->user()->name);
//        dd(auth()->user()->role_id);
        return view('home');
    }
}
