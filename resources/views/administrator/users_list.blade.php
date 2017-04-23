@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        @foreach($users as $user)
           <a href="/users_list/{{ $user->id }}"> {{ $user->name }}</a> | {{ $user->email }} | {{ $user->gpa }}<br/>
        @endforeach
    </div><!-- /.blog-main -->
@endsection