<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\newBookings;
use DB;

class bookingsController extends Controller
{
    public function bookings()
      {
    //   $users = newBookings::paginate(5);
      $users = newBookings::all();
     return view('user.bookings')->with('users', $users);
    	}
    public function PaymentProceed(Request $request)
      {
          $RoomName = $request->input('RoomName');
          $RoomSize = $request->input('RoomSize');
          $Username = $request->input('Username');
          $Vendorname = $request->input('Vendorname');
          $FromDate = $request->input('FromDate');
          $ToDate = $request->input('ToDate');
          $FromTime = $request->input('FromTime');
          $ToTime = $request->input('ToTime');
          $Price = $request->input('Price');

         // $checker = payments::select('RoomName','RoomSize')->where('RoomName', $request->input('RoomName'))->get();
          //if($checker === null){

          DB::insert('insert into payments (RoomName,RoomSize,Username,Vendorname,Price,FromDate,ToDate,FromTime,ToTime) values (?,?,?,?,?,?,?,?,?)', [$RoomName, $RoomSize, $Username, $Vendorname, $Price,$FromDate,$ToDate,$FromTime,$ToTime ]);

          return redirect()->back()->with('status', 'successfully added');
        }
        //else{
         // return redirect()->back()->with('statusf', 'failed! Order has already being made');
        //}
      //}
}
