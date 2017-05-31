<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gpa', 'studentid', 'role_id', 'profile_picture'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles()
    {
         return $this->belongsToMany(Role::class);
    }
    public function courses(){
        return $this->belongsToMany(Course::class)->withTimestamps();
    }
    public function uploads(){
        return $this->hasMany(Upload::class);
    }
    public function assignRole($name){
        $this->roles()->create(compact('name'));
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
