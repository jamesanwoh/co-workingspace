<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bookings;
use App\UserEnquires;
use DB;




class ManageAllBookingsControlller extends Controller
{

	public function NewOpenings()
    {
   	return view('admin.New_Openings');
   	}
   	public function Update_Bookings($id){
    $user_role = bookings::find($id);
    return view('admin.UpdateBookings')->with('user_role', $user_role);
   	}

    public function store(Request $request){
        	$RoomName = $request->input('RoomName');
        	$RoomSize = $request->input('RoomSize');
        	$Vendorname = $request->input('Vendorname');
        	$Status = $request->input('Status');
        	$Price = $request->input('Price');


        	DB::insert('insert into bookings (RoomName,RoomSize,Vendorname,Status,Price) values (?,?,?,?,?)', [$RoomName, $RoomSize, $Vendorname, $Status, $Price]);

        	return redirect()->back()->with('status', 'successfully added');
    }
   	 public function Delete_Booking($id){
    	$user_role = Bookings::find($id);
    	return view('admin.deleteBookings')->with('user_role', $user_role);
    }
    public function destroyBooking($id){
    	DB::delete('delete from bookings where id = ?',[$id]);
      return redirect('/dashboardAdmin')->with('status', 'successfully deleted');
	}
    public function saveUpdate(Request $request, $id){
      $Bookings = Bookings::find($id);
      $Bookings->RoomName = $request->input('RoomName');
      $Bookings->RoomSize = $request->input('RoomSize');
      $Bookings->Vendorname = $request->input('Vendorname');
      $Bookings->Status = $request->input('Status');
      $Bookings->Price = $request->input('Price');
      $Bookings->update();

      return redirect()->back()->with('status', 'successfully updated');


    }


}
