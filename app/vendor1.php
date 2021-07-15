<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendor1 extends Model
{
    protected $fillable = [
        'Username', 'email','Firstname','Lastname','gender','phone_number','Address', 'password','role_as',
    ];
}
