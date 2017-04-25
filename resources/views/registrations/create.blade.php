@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Register now</h1>

        <form method="POST" action="/register" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="text" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('gpa') ? ' has-error' : '' }}">
                <label for="gpa" class="col-md-4 control-label">GPA</label>

                <div class="col-md-6">
                    <input id="gpa" type="text" class="form-control" name="gpa" required>

                    @if ($errors->has('gpa'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('gpa') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('studentid') ? ' has-error' : '' }}">
                <label for="studentid" class="col-md-4 control-label">Student ID</label>

                <div class="col-md-6">
                    <input id="studentid" type="file" class="form-control" name="studentid" required>

                    @if ($errors->has('studentid'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('studentid') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>

        </form>
    </div><!-- /.blog-main -->
@endsection