<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
//        dd(auth()->user()->name);
        return view('home');
    }
}
