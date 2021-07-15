<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\newBookings;

class MakePaymentNowController extends Controller
{
    public function Make_payment_Now($id)
      {
        $user_role = newBookings::find($id);
        return view('user.Make_payment_Now')->with('user_role', $user_role);;
      }
}
