<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Course;
use App\Response;
class Post extends Model
{
    protected $fillable = ['user_id', 'course_id', 'title', 'body'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function responses(){
        return $this->hasMany(Response::class);
    }
}
