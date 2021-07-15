<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\newBookings;
use App\bookings;
use App\payments;
use DB;


class NewRequestController extends Controller
{
    public function UserRequest(){
       $users = bookings::all();
     return view('user.UserRequest')->with('users', $users);
      }
      public function UserRequestId($id)
      {
      $user_role = bookings::find($id);
      return view('user.UserRequestId')->with('user_role', $user_role);
    }
    public function ClickHereToProceed(Request $request)
      {
          $RoomName = $request->input('RoomName');
          $RoomSize = $request->input('RoomSize');
          $Username = $request->input('Username');
          $Vendorname = $request->input('Vendorname');
          $Price = $request->input('Price');

         // $checker = newBookings::select('RoomName','RoomSize')->where('RoomName', $request->input('RoomName'))->get();
          //if($checker === null){
         DB::insert('insert into new_bookings (RoomName,RoomSize,Username,Vendorname,Price) values (?,?,?,?,?)', [$RoomName, $RoomSize, $Username, $Vendorname, $Price]);

          return redirect()->back()->with('status', 'successfully added');
        }
         //elseif($checker !== null){
         // return redirect()->back()->with('statusf', 'failed! Order has already being made');
        //}
      //}
}
