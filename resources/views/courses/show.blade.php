@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
    <h1>{{ $course->course_name }}</h1>
        Files for this course:<br/>
        @foreach($files as $file)
            <h1><a href="{{ Storage::disk('local')->url($file->filepath) }}">{{ $file->filename }}</a></h1>
        @endforeach
    </div>
@endsection