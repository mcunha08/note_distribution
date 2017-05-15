@extends('layouts.master')

@section('content')
    <h1>List of all courses:</h1>
    <div class="col-sm-8 blog-main">
        <ul>
            @foreach($courses as $course)
                <li><a href="/course_list/{{ $course->id }}">{{ $course->course_name }}</a> <a href="/subscribe/{{ $course->id }}">Subcribe</a></li>
            @endforeach
        </ul>
    </div>
@endsection