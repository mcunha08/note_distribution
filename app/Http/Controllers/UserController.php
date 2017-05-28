<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Upload;
class UserController extends Controller
{
    public function subscribe($id){
        $user = auth()->user();
        $user->courses()->attach($id, []);
        $message = sprintf("Successfully subscribed to %s",Course::find($id)->course_name);
        return view('single_message', compact('message'));
    }
    public function profile($id){
        $user = User::find($id);
        $files = Upload::where('user_id', $id)->get();
//        dd($files);
        return view('users.profile', compact('user','files'));
    }
}
