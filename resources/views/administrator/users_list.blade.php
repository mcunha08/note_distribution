@extends('layouts.master')
@section('title')
    Note Distribution - User List
@endsection
@section('content')
    <div class="col-sm-8 blog-main">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>GPA</th>
            </tr>
        @foreach($users as $user)
           <tr>
               <td><a href="/users_list/{{ $user->id }}"> {{ $user->name }}</a></td>
               <td>{{ $user->email }} </td>
               <td>{{ $user->gpa }}</td>

            </tr>
        @endforeach
        </table>
    </div><!-- /.blog-main -->
@endsection