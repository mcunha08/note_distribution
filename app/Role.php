<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Role extends Model
{
     public $timestamps = false;

     public function users()
     {
         return $this->hasMany(User::class);
     }
}
