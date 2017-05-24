<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = ['filepath', 'filename', 'course_id'];

    public function courses(){
        return $this->belongsToMany(Course::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
