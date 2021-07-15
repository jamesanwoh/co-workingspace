<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Bookings;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class ManageBookingsController extends Controller
{
        public function store(Request $request){

        	$RoomName = $request->input('RoomName');
        	$RoomSize = $request->input('RoomSize');
        	$Vendorname = $request->input('Vendorname');
            $Status = $request->input('Status');
            $Price = $request->input('Price');

            if($request->hasfile('image'))
            {
                    $file = $request->file('image');
                    $filename = 'image' . '-' . time() .'.'. $file->getClientOriginalExtension();
                    $location = public_path('uploads/files/' . $filename);
                    Image::make($file)->resize(300,362)->save($location);
                    $image= $filename;

                    // $oldfilename = $user->image;
                    // $user->image = $filename;
                    // storage::delete($oldfilename);
                    // }

            }
            $description =  $request->input('description');
            $category =  $request->input('category');
            $location =  $request->input('location');
            $details = $request->input('details');


        	DB::insert('insert into bookings (RoomName,RoomSize,Vendorname,Status,Price,image,description,category,location,details) values (?,?,?,?,?,?,?,?,?,?)', [$RoomName, $RoomSize, $Vendorname, $Status, $Price, $image, $description, $category, $location, $details ]);

        	return redirect()->back()->with('status', 'successfully added');
    }

    public function edit($id){
    	$user_role = bookings::find($id);
    	return view('vendor.edit')->with('user_role', $user_role);
    }
    public function update(Request $request, $id){
    	$user = bookings::find($id);
    	$user->RoomName = $request->input('RoomName');
    	$user->RoomSize = $request->input('RoomSize');
    	$user->Vendorname = $request->input('Vendorname');
    	$user->Status = $request->input('Status');
    	$user->Price = $request->input('Price');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = 'image' . '-' . time() .'.'. $file->getClientOriginalExtension();
            $location = public_path('uploads/files/' . $filename);
            Image::make($file)->resize(1300,362)->save($location);
            $user->image= $filename;

            $oldfilename = $user->image;
            $user->image = $filename;
            storage::delete($oldfilename);
            }
            $user->description =  $request->input('description');
            $user->category =  $request->input('category');
            $user->location =  $request->input('location');
            $user->details = $request->input('details');

    	$user->update();

    	return redirect()->back()->with('status', 'successfully updated');
    }


    public function delete($id){
    	$user_role = Bookings::find($id);
    	return view('vendor.delete')->with('user_role', $user_role);
    }
    public function destroy($id){
    	DB::delete('delete from bookings where id = ?',[$id]);
    	return redirect('/dashboardVendor')->with('status', 'successfully deleted');
	}

    /* function Export($id)
    {
        $data = DB::table('bookings')->where('id', $id)->get();
        $data_details[] = array('RoomName', 'RoomSize', 'Username', 'status');
        Excel::create('data',);
        $excel->setTile('data');
        $excel->sheet('data')
    }*/

}
