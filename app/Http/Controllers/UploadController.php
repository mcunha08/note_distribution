<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\Upload;
use App\Course;
use App\Report;
use Mail;
use Log;
use Illuminate\Support\Facades\DB;
class UploadController extends Controller
{
    public function file_upload(){
        $courses = Course::all();
        return view('uploads.upload_form', compact('courses'));
    }
    public function store(){
        if(!request()->hasFile('uploadfile')) {
            return back();
        }
        if(empty(request()->course)&& request()->courselist == 0){
            return back()->withErrors("The course name must contain at least one character");
        }
        $filename = request()->file('uploadfile')->getClientOriginalName();
        $file = request()->file('uploadfile')->store('public');
        if(request()->courselist == 0) {
            $coursename = request()->course;
            $course = Course::where('course_name', $coursename)->first();
            if (!$course) {
                $course = Course::create(['course_name' => $coursename]);
            }
        }
        else{
            $course = Course::find(request()->courselist);
        }
//        DB::enableQueryLog();
        $upload = Upload::create([
            'filepath' => $file,
            'filename' => $filename,
            'course_id' => $course->id,
            'user_id' => auth()->user()->id
        ]);
//        Log::error(DB::getQueryLog());
        $users_to_email = $course->users()->where('emails',1)->get();

        foreach($users_to_email as $user) {
            Mail::send('emails.subscribe_notification', compact('course', 'filename', 'user', 'url'), function ($m) use ($user, $course) {
                $m->from('note_distribution@wou.edu', 'Note Distrbution');
                $m->to($user->email, $user->name)->subject('New course material available for ' . $course->course_name);
            });
        }
        return view('uploads.successful_upload', compact('upload', 'filename','user', 'url'));
    }
    public function report($id){

        if(count(Report::where('user_id', auth()->user()->id)->where('upload_id', $id)->get()) == 0){
            Report::create([
                'user_id' => auth()->user()->id,
                'upload_id' => $id]);
        }
        return back();
    }
}
