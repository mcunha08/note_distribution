@extends('layouts.master')

@section('content')
    <h1>List of all courses:</h1>
    <div class="col-sm-8 blog-main">
        <ul>
            @foreach($courses as $course)
                <li>{{ $course->course_name }}</li>
            @endforeach
        </ul>
    </div>
@endsection