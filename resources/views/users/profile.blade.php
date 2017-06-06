@extends('layouts.master')
@section('title')
    Note Distribution - Course List
@endsection
@section('content')
    <div class="col-sm-8 blog-main">
        <img class="profile-picture" src="{{ Storage::disk('local')->url($user->profile_picture) }}" height="320" width="520">
        <div class="col-sm-12">Name: {{ $user->name }}</div>
        <div class="col-sm-12">GPA: {{ $user->gpa }}</div>
        <div class="col-sm-12">Role: {{ App\Role::find($user->role_id)->role }}</div>
        <div class="col-sm-12">Member since: {{ $user->created_at->toFormattedDateString() }}</div>
        <div class="col-sm-12" style="height:20px"></div>
        <div class="col-sm-12">
            <h1>Files uploaded:</h1>
            <table>
                <tr>
                    <th>Filename</th>
                    <th>Course</th>
                    <th>Date uploaded</th>
                </tr>
                @foreach($files as $file)
                    <tr>
                        <td><a href="{{ Storage::disk('local')->url($file->filepath) }}">{{ $file->filename }}</td>
                        <td><a href="/course_list/{{$file->course_id}}">{{ App\Course::find($file->course_id)->course_name }}</a></td>
                        <td>{{$file->created_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            </table>
            <div class="col-sm-12"><br/></div>
            @if(auth()->user()->id == $user->id)
                <div class="col-sm-12">
                    <h1>Your subscribed courses:</h1>
                    <ul>
                        @foreach(auth()->user()->courses as $course)
                            <li>{{$course->course_name}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-12">
                    @if(auth()->user()->emails == 1)
                        <a href="/send_no_emails">Click here to shut off email notifications for subscribed courses</a>
                    @else
                        <a href="/send_emails">Click here to turn on email notifications for subscribed courses</a>
                    @endif
                </div>
            @endif
        </div>
    </div>
@endsection