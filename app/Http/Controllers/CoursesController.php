<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Upload;
class CoursesController extends Controller
{
    public function show($id){
        $course = Course::find($id);
        $files = Upload::where('course_id', $id)->get();
        $posts = $course->posts()->get();
//        dd($posts);
        return view('courses.show', compact('course', 'files', 'posts'));
    }
}
