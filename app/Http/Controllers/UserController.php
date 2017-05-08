<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class UserController extends Controller
{
    public function subscribe($id){
        $user = auth()->user();
        $user->courses()->attach($id, []);
        $message = sprintf("Successfully subscribed to %s",Course::find($id)->course_name);
        return view('single_message', compact('message'));
    }
}
