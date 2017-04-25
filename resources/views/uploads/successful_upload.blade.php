@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Upload successful, <a href="{{ Storage::disk('local')->url($upload->filepath) }}">click to view</a></h1>
    </div><!-- /.blog-main -->
@endsection