@extends('layouts.master')
@section('title')
    Note Distribution - Upload a file
@endsection
@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Upload course material</h1>
        <form method="POST" action="/upload" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group col-sm-12 {{ $errors->has('course') ? ' has-error' : '' }}">
                <label for="course" class="col-sm-4 control-label">New course:</label>

                <div class="col-sm-8">
                    <input id="course" type="text" class="form-control" name="course">

                    @if ($errors->has('course'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            <div class="form-group col-sm-12 {{ $errors->has('courselist') ? ' has-error' : '' }}">
                <label for="courselist" class="col-sm-4 control-label">Existing course:</label>

                <div class="col-sm-8">
                    <select name="courselist">
                        <option value="0">No course selected</option>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('course'))
                        <span class="help-block">
                            <strong>{{ $errors->first('course') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group col-sm-12 {{ $errors->has('uploadfile') ? ' has-error' : '' }}">
                <label for="uploadfile" class="col-sm-4 control-label">File:</label>

                <div class="col-sm-8">
                    <input id="uploadfile" type="file" class="form-control" name="uploadfile" required>

                    @if ($errors->has('uploadfile'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('uploadfile') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 ">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div><!-- /.blog-main -->
@endsection