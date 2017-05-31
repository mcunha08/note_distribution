@extends('layouts.master')
@section('title')
    Note Distribution
@endsection

@section('content')
    <div class="col-sm-8 blog-main">
        <div class="blog-header">
            <h1 class="blog-title">Note Distribution</h1>
            <p class="lead blog-description">Course material uploading service for WOU students.</p>
        </div>
        <div class="home-page-content">
            <p>Note Distribution is a student developed web solution that allows students to share course materials with
                their fellow classmates</p>
            <p>Using our interface, you can quickly navigate between courses and available material submitted by WOU
                students.</p>
            <p>To get started, you must first apply by <a href="/register">registering a new account</a> and uploading
                an image of your Student ID. Our administrators will review your application and activate your account
                within one business day of your submission.</p>
            <br/>
            <div style="text-align: center"><a  href="/register">Click here to apply now</a></div>
        </div>
        {{--Once your account is activated, you'll be able to view the list of courses with content served by Note Distribution.--}}
        {{--You may upload new course material by clicking the upload button. If the course you're uploading material for is unlisted, you can create a new course by typing in the course name.--}}
        <div class="blog-post">
            {{--<h2 class="blog-post-title">Sample blog post</h2>--}}
            {{--<p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>--}}
        </div>
    </div><!-- /.blog-main -->
@endsection