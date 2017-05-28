@extends('layouts.master')
@section('title')
    {{--TODO include course in request for posts--}}
    Note Distribution - Post Details
@endsection
@section('content')
    <div class="col-sm-8 blog-main">
        <div class="col-sm-12">
        <p class="post-title">{{ $post->title }}</p>
        <p>{{ $post->body }}</p>
        <p style="font-size:0.7em;float:right">Posted by {{ App\User::find($post->user_id)->name }} at {{$post->created_at->diffForHumans()}}</p>
        </div>

        <hr/>
        <h2>Responses: </h2>
        @foreach($responses as $response)
            @include('partials.response')
        @endforeach
        @if(count($responses) == 0)
            <p style="font-size:1.2em">No responses for this post</p>
        @endif
    <hr/>
        <h2>Submit a response:</h2>
        <form method="POST" action="/create_response/{{$post->id}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <label for="body" class="col-md-4 control-label">Body:</label>

                <div class="col-md-6">
                    <textarea name="body" cols="40" rows="5"></textarea>

                    @if ($errors->has('body'))
                        <span class="help-block">
                                            <strong>{{ $errors->first('body') }}</strong>
                                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12" >
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>

        </form>
    </div>
@endsection