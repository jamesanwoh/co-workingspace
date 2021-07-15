<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\bookings;
use App\payments;
use App\UserEnquires;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\file;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
    return view('admin.dashboard');
}
    public function AdminProfile(){
    return view('admin.profile');
}
    public function editAdmin(){
    return view('admin.EditProfile');
}
	public function update(Request $request){

		$user_id = Auth::user()->id;
    	$user = User::findOrfail($user_id);
    	$user->Username = $request->input('Username');
    	$user->Firstname = $request->input('Firstname');
    	$user->Lastname = $request->input('Lastname');
    	$user->email = $request->input('email');
    	$user->phone_number = $request->input('phone_number');
    	$user->Address = $request->input('Address');

            if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = 'image' . '-' . time() .'.'. $file->getClientOriginalExtension();
            $location = public_path('uploads/profile/' . $filename);
            Image::make($file)->resize(1300,362)->save($location);
            $user->image= $filename;

            $oldfilename = $user->image;
            $user->image = $filename;
            storage::delete($oldfilename);
            }
            $user->save();
            return redirect()->back()->with('status', 'successfully updated');
    	}

   	public function ManageBookings(){
     $users = bookings::all();
     return view('admin.ManageBookings')->with('users', $users);
    }
    public function AllPayments(){
     $users = payments::all();
     return view('admin.AllPayments')->with('users', $users);
    }
    public function AllReports(){
     //$users = payments::all();
     return view('admin.AllReports');//->with('users', $users);
    }
    public function AllCompliant(){
    $users = UserEnquires::all();
    return view('admin.AllCompliant')->with('users', $users);
    }

    public function UsersRequest(){
    $users = payments::all();
    return view('admin.UsersRequest')->with('users',$users);
    }
    public function ChatWithVendor(){
    return view('admin.ChatWithVendor');
    }
     public function ChatWithUsers(){
    return view('admin.ChatWithUsers');
    }
    public function CloseComplaint($id){
    DB::delete('delete from user_enquires where id = ?',[$id]);
    return redirect()->back()->with('status', 'successfully closed');
  }
}
