@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Test grounds</h1>
        <img src="{{ Storage::disk('local')->url($imgurl) }}" height="40" width="40">
    </div><!-- /.blog-main -->
@endsection