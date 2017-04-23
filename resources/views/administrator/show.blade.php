@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <ul>
            <li>Name: {{ $user->name }}</li>
            <li>Email: {{ $user->email }}</li>
            <li>GPA: {{ $user->gpa }}</li>
            <li>Roles: {{ $user->roles }}</li>
        </ul>
    </div><!-- /.blog-main -->
@endsection