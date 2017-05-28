<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Recently Uploaded</h4>
        <ul>
        @foreach(App\Upload::orderBy('id', 'desc')->take(5)->get() as $upload)
            <li>
            <a href="/course_list/{{$upload->course_id}}">{{App\Course::find($upload->course_id)->course_name}}</a>
            <a href="{{Storage::disk('local')->url($upload->filepath) }}">{{$upload->filename}}</a>
            </li>
        @endforeach
        </ul>
    </div>
    <div class="sidebar-module">
        <h4>Social Media</h4>
        <ol class="list-unstyled">
            <a href="https://www.facebook.com/profile.php?id=100017351354993"><img class="icon" src="/images/facebook_icon.png" ></img></a>
            <a href="https://twitter.com/notedist"><img class="icon" src="/images/twitter_icon.png"></img></a>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->