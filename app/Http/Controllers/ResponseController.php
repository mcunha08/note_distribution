<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Response;
class ResponseController extends Controller
{
    public function create($id){
        Response::create([
            'user_id' => auth()->user()->id,
            'post_id' => $id,
            'body' => request('body')
        ]);
        return redirect('/posts/'.$id);
    }
}
