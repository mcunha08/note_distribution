<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdministratorsController extends Controller
{
    public function list(){
        $users = User::all();
        return view('administrator.users_list', compact('users'));
    }
    public function show($id){
        $user = User::find($id);
        return view('administrator.show',compact('user'));

    }
}
