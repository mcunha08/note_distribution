@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
    <h1>{{ $course->course_name }}</h1>
        Files for this course:<br/>
        <table>
            <tr>
                <th>Filename</th>
                <th>User</th>
                <th>Date uploaded</th>
            </tr>
        @foreach($files as $file)
            <tr>
                <td><a href="{{ Storage::disk('local')->url($file->filepath) }}">{{ $file->filename }}</td>
                <td>{{ App\User::find($file->user_id)->name }}</td>
                <td>{{$file->created_at}}</td>
            </tr>
        @endforeach
        </table>

        <a href="/create_post/{{$course->id}}">Create a post for this course</a>
        <br/>
        <br/>
        <h2>Posts for this course:</h2>
            @foreach($posts as $post)
                <p><a href="/posts/{{$post->id}}">{{$post->title}}</a> by {{ App\User::find($post->user_id)->name }} ({{$post->created_at}})</p>
            @endforeach
        </table>
    </div>
@endsection