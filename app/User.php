<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['u_name','u_email','u_city','u_address','u_mobile'];
    //
}
