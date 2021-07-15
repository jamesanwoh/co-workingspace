<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\User;
use App\bookings;
use App\payments;
use App\UserEnquires;
use DB;

class VendorController extends Controller
{

     public function index()
     {
   	 return view('vendor.dashboard');
      }
      public function VendorProfile()
     {
   	 return view('vendor.profile');
      }


      public function editVendor()
      {
         return view('vendor.Editprofile');
       }
	   public function bookings()
     {
    $user_name = Auth::user()->Username;
    $users= bookings::where('Vendorname', $user_name)->get();
   	return view('vendor.ManageBookings')->with('users', $users);
   	}

   	public function New_Openings()
    {
   	return view('vendor.New_Opening');
   	}

   	public function Reports()
    {
   	return view('vendor.Reports');
   	}

   	public function Compliant_Enquires()
    {
    $user_name = Auth::user()->Username;
    $users= UserEnquires::where('Vendorname', $user_name)->get();
   	return view('vendor.Compliant_Enquires')->with('users', $users);
   	}

   	public function Users_Request()
    {
    $user_name = Auth::user()->Username;
    $users= payments::where('Vendorname', $user_name)->get();
   	return view('vendor.User_Request')->with('users', $users);
   	}

   	public function Chat_with_Admin()
    {
   	return view ('vendor.Chat_With_Admin');
   	}

   	public function payments()
    {
    $user_name = Auth::user()->Username;
    $user= payments::where('Vendorname', $user_name)->get();
    return view('vendor.payments')->with('user', $user);
   	}
    public function CloseComplaints($id){
    DB::delete('delete from user_enquires where id = ?',[$id]);
    return redirect('/dashboardVendor')->with('status', 'successfully closed');
  }
}
