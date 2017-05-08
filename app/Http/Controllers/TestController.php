<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class TestController extends Controller
{
    public function home(){
        $user = User::find(auth()->user()->id);
        $imgurl= $user->studentid;

        return view('test.playground', compact('imgurl'));
    }


}
