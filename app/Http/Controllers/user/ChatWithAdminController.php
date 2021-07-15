<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatWithAdminController extends Controller
{
       	public function ChatAdmin()
      {
   		return view('user.ChatAdmin');
   	  }
}
