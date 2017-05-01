<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class SearchController extends Controller
{
    public function course_search()
    {
        $courses = Course::where("course_name", 'like', "%" . request()->searchcourse ."%")->get();
        return view('courses.searchresults', compact('courses'));
    }
    public function list_all(){
        $courses = Course::all();
        return view('courses.course_list', compact('courses'));
    }
}
