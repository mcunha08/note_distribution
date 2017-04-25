@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Upload course material</h1>
        <form method="POST" action="/upload" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('uploadfile') ? ' has-error' : '' }}">
                <label for="uploadfile" class="col-md-4 control-label">File to upload:</label>

                <div class="col-md-6">
                    <input id="uploadfile" type="file" class="form-control" name="uploadfile" required>

                    @if ($errors->has('uploadfile'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('uploadfile') }}</strong>
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
    </div><!-- /.blog-main -->
@endsection