@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <ul>
            <li>Name: {{ $user->name }}</li>
            <li>Email: {{ $user->email }}</li>
            <li>GPA: {{ $user->gpa }}</li>
            <li>Roles: {{ App\Role::find($user->role_id)->role }}</li>
        </ul>
        <img src="{{ Storage::disk('local')->url($user->studentid) }}" height="320" width="520">
        <a href="/activate_student/{{ $user->id }}">Activate this student</a>

    </div><!-- /.blog-main -->
@endsection