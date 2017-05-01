<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="/">Home</a>
            @if(!Auth::check())
            <a class="blog-nav-item" href="/login">Log-in</a>
            <a class="blog-nav-item" href="/register">Register</a>
            @endif
                @if(Auth::check())
                <a class="blog-nav-item" href="#">Hello, {{ Auth::user()->name }}</a>
                @endif

            @if(Auth::check())
                @if(auth()->user()->gpa >= 3.0)
                    <a class="blog-nav-item" href="/upload">Upload</a>
                @endif
            @endif
            @if(Auth::check())
                <a class="blog-nav-item" href="/logout">Logout</a>
            @endif
            @if(Auth::check())
                @if(auth()->user()->role_id == App\Role::where("role", "Administrator")->first()->id)
                    <a class="blog-nav-item" href="/users_list">Student List</a>
                @endif
            @endif
        </nav>
    </div>
</div>