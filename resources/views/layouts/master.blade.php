<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
</head>

<body>
@include('partials.nav')
<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Note Distribution</h1>
        <p class="lead blog-description">Course material uploading service for WOU students.</p>
    </div>

    <div class="row">
        @yield('content')

        @include('partials.sidebar')
    </div><!-- /.row -->
    @include('partials.footer')
    @include('partials.scripts')
</div><!-- /.container -->
</body>
</html>
