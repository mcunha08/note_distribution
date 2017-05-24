<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Post;
class PostsController extends Controller
{
    public function show($id){
        $course = Course::find($id);
        return view('posts.create_post', compact('course'));
    }
    public function create($id){
        Post::create([
            'user_id' => auth()->user()->id,
                'course_id' => $id,
                'title' => request('title'),
                'body' => request('body')
        ]);
        return redirect('course_list/' . $id);
    }
    public function show_post($id){
        $post = Post::find($id);
        $responses = $post->responses()->get();
        return view('posts.show', compact('post', 'responses'));
    }
}
