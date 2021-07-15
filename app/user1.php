<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user1 extends Model
{
    protected $fillable = [
        'Username', 'email','Firstname','Lastname','gender','phone_number','Address', 'password','role_as','image'
    ];
     //public function IsUserOnline(){
       // return Cache::has('user-is-online' . $this->id);
    }
