<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $fillable = [
         'firstname','lastname','phonenumber','email', 'message'];
}
