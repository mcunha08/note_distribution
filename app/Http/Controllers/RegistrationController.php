<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use Illuminate\Support\Facades\Input;
class RegistrationController extends Controller
{
    public function create(){
        return view('registrations.create');
    }
    public function store(){
//        $username = auth()->user()->name;
        if(request()->hasFile('studentid')) {
            $file = request()->file('studentid')->store('public');
//            $ext = $file->guessClientExtension();
//            $file->storeAs("studentids/", auth()->id(), 'studentid.{$ext}');
        }
        else{
            return back()->withErrors(['message'=>'Please upload your student id']);
        }
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'gpa' => request('gpa'),
            'studentid' => $file,
            'role_id' => Role::where('role', 'InactiveStudent')->first()->id
        ]);
        $user->save();
        auth()->login($user);
        return redirect('/');
    }
}
