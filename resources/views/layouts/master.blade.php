<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
</head>

<body>
@include('partials.nav')
<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
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