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
        return view('courses.show', compact('course', 'files'));
    }
}
