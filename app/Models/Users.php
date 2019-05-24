<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['first_name','last_name','username','email','phone','password','user_type','remember_token','status','created_at','updated_at'];
}
