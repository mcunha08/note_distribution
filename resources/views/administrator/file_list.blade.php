@extends('layouts.master')
@section('title')
    Note Distribution - File List
@endsection
@section('content')
    <div class="col-sm-8 blog-main">
        <table>
            <tr>
                <th>File ID</th>
                <th>Filename</th>
                <th>Course</th>
                <th>Uploaded by</th>
                <th>Created</th>
                <th>Delete</th>
                <th style="color:red">Reports</th>
            </tr>
            @foreach($uploads as $upload)
                <tr>
                    <td>{{ $upload->id }}</td>
                    <td>{{ $upload->filename }}</td>
                    <td>{{ App\Course::find($upload->course_id)->course_name  }}</td>
                    {{--TODO link to user profile--}}
                    <td><a href="/users/{{$upload->user_id}}">{{App\User::find($upload->user_id)->name}}</a></td>
                    <td>{{$upload->created_at}}</td>
                    <td><a href="/file_delete/{{ $upload->id  }}">Delete</a></td>
                    <td style="color:red;text-align:center">{{count(App\Report::where('upload_id', $upload->id)->get())}}</td>
                </tr>
            @endforeach
        </table>
        {{ $uploads->links() }}
    </div>
@endsection