<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\User;
use App\user1;
use App\bookings;
use App\UserEnquires;
use App\payments;
use App\newBookings;
use Illuminate\support\Facades\file;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use DB;


class UserController extends Controller
{
     public function index()
     {
   	 return view('user.dashboard');
		 }
      public function UserProfile()
     {
        return view('user.profile');
     }
     public function editUser()
      {
         return view('user.EditProfile');
       }
}
