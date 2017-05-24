@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <p>{{ $post->title }}</p>
        <p>{{ $post->body }}</p>
        <p style="font-size:0.7em">Posted by {{ App\User::find($post->user_id)->name }} at {{$post->created_at}}</p>
        <h2>Responses: </h2>
        @foreach($responses as $response)
            <p>{{$response->body}} ({{ App\User::find($response->user_id)->name }}, {{$response->created_at}})</p>
        @endforeach
    <br/>
    <br/>
        <h2>Submit a response:</h2>
        <form method="POST" action="/create_response/{{$post->id}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <label for="body" class="col-md-4 control-label">Body:</label>

                <div class="col-md-6">
                    <input id="body" type="textarea" class="form-control" name="body">

                    @if ($errors->has('body'))
                        <span class="help-block">
                                            <strong>{{ $errors->first('body') }}</strong>
                                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-0 ">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>

        </form>
    </div>
@endsection