<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_name'];

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
