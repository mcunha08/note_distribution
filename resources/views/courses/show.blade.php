@extends('layouts.master')
@section('title')
    Note Distribution - {{$course->course_name}}
@endsection
@section('content')
    <div class="col-sm-8 blog-main">
    <h1>{{ $course->course_name }}</h1>
        Files for this course:<br/>
        <table>
            <tr>
                <th>Filename</th>
                <th>User</th>
                <th>Uploaded</th>
                <th>Report</th>
            </tr>
        @foreach($files as $file)
            <tr>
                <td><a href="{{ Storage::disk('local')->url($file->filepath) }}">{{ $file->filename }}</td>
                <td><a href="/users/{{$file->user_id}}">{{ App\User::find($file->user_id)->name }}</a></td>
                <td>{{$file->created_at->diffForHumans()}}</td>
                <td><a href="/report/{{ $file->id  }}">Report this file</a></td>
            </tr>
        @endforeach
        </table>

        <hr/>
        <h2>Posts for this course:</h2>
            @foreach($posts as $post)
                <p style="font-size:0.8em"><a style="font-size: 1.4em; font-weight: 500" href="/posts/{{$post->id}}">{{$post->title}}</a> by {{ App\User::find($post->user_id)->name }} ({{$post->created_at->diffForHumans()}})</p>
            @endforeach
            @if(count($posts) == 0)
            <p style="font-size:1.2em">No posts for this course</p>
            @endif
            <a href="/create_post/{{$course->id}}">
                <div class="new-post">
                    Create a new post for this course
                </div>
            </a>
    </div>
@endsection