<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\Course;
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
        $filename = request()->file('uploadfile')->getClientOriginalName();
        $file = request()->file('uploadfile')->store('public');
//        dd(request()->all());

        if(request()->courselist == 0) {
            $coursename = request()->course;
            $course = Course::where('course_name', $coursename)->first()->id;
            if (!$course) {
                $course = Course::create(['course_name' => $coursename]);
            }
        }
        else{
            $course = request()->courselist;
        }
        $upload = Upload::create([
            'filepath' => $file,
            'filename' => $filename,
            'course_id' => $course
        ]);


        return view('uploads.successful_upload', compact('upload'));
    }
}
