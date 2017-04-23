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
//        dd(request()->all());
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'gpa' => request('gpa'),
            'role' => 'InactiveStudent'
        ]);
//        dd($user->gpa);
        $user->save();
        auth()->login($user);
        return redirect('/');
    }
}
