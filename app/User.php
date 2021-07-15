<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Username', 'email','Firstname','Lastname','gender','phone_number','Address', 'password','role_as',
   'image', ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $add_validation_rules =[
            'Username' => 'required|max:255','Firstname'=> 'required|max:255','Lastname' => 'required|max:255','role_as' => 'required|max:255','email' => 'required|max:255|unique:users','password' => 'required|min:8','gender' => 'required|max:255', 'phone_number' => 'required|integer|max:255', 'Address' => 'required|max:255',
    ];
}
