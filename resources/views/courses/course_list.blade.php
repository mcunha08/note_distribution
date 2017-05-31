@extends('layouts.master')
@section('title')
    Note Distribution - Course List
@endsection
@section('content')
    <h1>List of all courses:</h1>
    <div class="col-sm-8 blog-main">
        <table class="course-list">
            <tr>
                <th>Course Name</th>

                <th>Subscribe</th>
            </tr>
            @foreach($courses as $course)
                <tr>

                    <td><a href="/course_list/{{ $course->id }}">{{ $course->course_name }}</a></td>
                    @if(count(auth()->user()->courses()->where('id', $course->id)->get()) == 0)
                    <td><a href="/subscribe/{{ $course->id }}">Subscribe</a></td>
                    @else
                        <td><a href="/unsubscribe/{{ $course->id }}">Unsubscribe</a></td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
@endsection