<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_name'];

    public function uploads(){
        return $this->$this->hasMany(Upload::class);
    }
    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
