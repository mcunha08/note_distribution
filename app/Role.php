<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Role extends Model
{
     public $timestamps = false;
     protected $fillable = ['role'];
     public function users()
     {
         return $this->hasMany(User::class);
     }
}
