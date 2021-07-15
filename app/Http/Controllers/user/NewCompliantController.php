<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\UserEnquires;
use DB;

class NewCompliantController extends Controller
{
	  public function New_Compliant()
      {
      return view('user.New_Compliant');
      }
      public function enquires()
      {
      $user_name = Auth::user()->Username;
      $user= UserEnquires::where('Username', $user_name)->get();
      return view('user.enquires')->with('user', $user);
   	  }
   	  public function New_CompliantProcess(Request $req)
      {
      $Username = $req->input('Username');
      $Vendorname = $req->input('Vendorname');
      $issue = $req->input('issue');
      $status = $req->input('status');
      DB::insert('insert into user_enquires (Username,Vendorname,issue,status) values (?,?,?,?)', [$Username ,$Vendorname, $issue, $status]);
      return redirect()->back()->with('status', 'successfully added');
      }
}
