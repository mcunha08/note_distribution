<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class AdministratorsController extends Controller
{
    public function list(){
        if(auth()->user()->role_id == Role::where("role", "Administrator")->first()->id) {
            $users = User::all();
            return view('administrator.users_list', compact('users'));
        }
        return view('administrator.yo');
    }
    public function show($id){
        if(auth()->user()->role_id == Role::where("role", "Administrator")->first()->id) {
            $user = User::find($id);
            return view('administrator.show', compact('user'));
        }
        return view('administrator.yo');
    }
    public function activate($id, $role){
        if(auth()->user()->role_id == Role::where("role", "Administrator")->first()->id) {
            $user = User::find($id);
            $user->role_id = $role;//Role::find($role)->first()->id;
            $user->save();
            return view('administrator.successful_activation', compact('user'));
        }
        return view('administrator.yo');
    }
}
