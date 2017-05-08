<h1>Dear {{ $user->name }},</h1>
<p>A course you've subscribed to, {{ $course->course_name }} has new material available for you to view.</p>
<br/>
{{ $filename }}
<br/>
{{--<a href="{{ $url }}">Click here to go to Note Distribution.</a>--}}