<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\payments;
use DB;

class paymentController extends Controller
{
    public function paymentts()
      {
      $user_name = Auth::user()->Username;
      $user_role = payments::where('Username', $user_name)->get();
      return view('user.paymentts')->with('user_role', $user_role);
      }

}
