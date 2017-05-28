@extends('layouts.master')
@section('title')
    Note Distribution - Make a new post
@endsection
@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Create a new post for {{$course->course_name}}</h1>
        <form method="POST" action="/create_post/{{$course->id}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title" class="col-md-4 control-label">Title:</label>

                <div class="col-md-8">
                    <input id="title" type="textarea" class="form-control" name="title">

                    @if ($errors->has('title'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <label for="body" class="col-md-4 control-label">Body:</label>

                <div class="col-md-6">
                    <textarea name="body" cols="41" rows="5"></textarea>

                    @if ($errors->has('body'))
                        <span class="help-block">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>

        </form>
    </div><!-- /.blog-main -->
@endsection