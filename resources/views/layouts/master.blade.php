<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
</head>

<body>
@include('partials.nav')
<div class="container">



    <div class="row">
        @yield('content')

        @include('partials.sidebar')
    </div><!-- /.row -->
{{--    @include('partials.footer')--}}
    @include('partials.scripts')
</div><!-- /.container -->
</body>
</html>
