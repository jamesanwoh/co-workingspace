<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
       'RoomName', 'RoomSize','Username','Price','Status', 'image', 'description', 'category', 'location', 'details'
        ];
    public $timestamps = false;
}

