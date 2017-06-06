@extends('layouts.master')
@section('title')
    Note Distribution
@endsection
@section('content')
    <div class="col-sm-8 blog-main">
        {{ $message }}
        <a href="{{ $link }}">{{$link_message}}</a>
    </div><!-- /.blog-main -->
@endsection