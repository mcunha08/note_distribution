<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="/">Home</a>
            <a class="blog-nav-item" href="/login">Log-in</a>
            <a class="blog-nav-item" href="/register">Register</a>
            @if(Auth::check())
                <a class="blog-nav-item" href="#">Hello, {{ Auth::user()->name }}</a>
            @endif
        </nav>
    </div>
</div>