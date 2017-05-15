@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <table>
            <tr>
                <th>File ID</th>
                <th>Filename</th>
                <th>Course</th>
                <th>Delete</th>
            </tr>
        @foreach($uploads as $upload)
            <tr>
                <td>{{ $upload->id }}</td>
                <td>{{ $upload->filename }}</td>
                <td>{{ App\Course::find($upload->course_id)->first()->course_name  }}</td>
                <td><a href="/file_delete/{{ $upload->id  }}">Delete</a></td>
            </tr>
        @endforeach
        </table>
    </div>
@endsection