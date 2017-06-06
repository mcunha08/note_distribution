@extends('layouts.master')
@section('title')
    Note Distribution - {{$user->name}}'s Application
@endsection
@section('content')
    <div class="col-sm-8 blog-main">
        <ul>
            <li>ID: {{ $user->id }}</li>
            <li>Name: {{ $user->name }}</li>
            <li>Email: {{ $user->email }}</li>
            <li>GPA: {{ $user->gpa }}</li>
            <li>Roles: {{ App\Role::find($user->role_id)->role }}</li>
        </ul>
        <img src="{{ Storage::disk('local')->url($user->studentid) }}" height="320" width="520">
        <br/>
        <a href="/activate_student/{{ $user->id }}/2">Activate this student</a>
        <br/>
        <a href="/activate_student/{{ $user->id }}/4">Create a new admin</a>
        <br/>
        @if(Auth::user()->id != $user->id)
            <a href="/user_delete/{{$user->id}}">Delete this user</a>
        @endif
    </div><!-- /.blog-main -->
@endsection