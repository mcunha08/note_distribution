<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create(){
        return view('registrations.create');
    }
    public function store(){
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password')
        ]);
        $user->save();
        return redirect('/');
    }
}
