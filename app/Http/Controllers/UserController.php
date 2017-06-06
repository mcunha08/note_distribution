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
        $link = "/course_list/";
        $link_message = "Click here to go back to the course";
        return view('single_message', compact('message', 'link', 'link_message'));
    }
    public function unsubscribe($id){
        $user = auth()->user();
        $user->courses()->detach($id);
        $message = sprintf("Successfully unsubscribed from %s",Course::find($id)->course_name);
        $link = "/course_list/";
        $link_message = "Click here to go back to the course";
        return view('single_message', compact('message', 'link', 'link_message'));
    }
    public function profile($id){
        $user = User::find($id);
        $files = Upload::where('user_id', $id)->get();
//        dd($files);
        return view('users.profile', compact('user','files'));
    }
    public function send_no_emails(){
        $user = User::find(auth()->user()->id);
        $user->emails = 0;
        $user->save();
        return redirect()->back();
    }
    public function send_emails(){
        $user = User::find(auth()->user()->id);
        $user->emails = 1;
        $user->save();
        return redirect()->back();
    }
}
