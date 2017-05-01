<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function login(){
        return view('sessions.create');
    }
    public function store(){
        //Attempt to authenitace thee agk;j
        if(!auth()->attempt(request(['email', 'password']))){
            return redirect('/');
//            return back()->withErrors(['message'=>'Failed to login']);
        }
        return redirect('/');
    }
    public function destroy(){
        auth()->logout();
        return redirect('/');
    }
}
