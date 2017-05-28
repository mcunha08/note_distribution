@extends('layouts.master')
@section('title')
    Note Distribution - Search Results
@endsection
@section('content')
   <h1>Search results:</h1>
   <div class="col-sm-8 blog-main">
   <ul>
        @foreach($courses as $course)
            <li>{{ $course->course_name }}</li>
        @endforeach
    </ul>
    </div>
@endsection