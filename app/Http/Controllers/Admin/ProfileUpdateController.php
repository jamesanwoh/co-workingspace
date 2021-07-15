<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProfileUpdateController extends Controller
{
    public function UpdateAdmin(Request $request)
     {
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
        Image::make($file)->resize(500,500)->save($location);
        $user->image= $filename;

        $oldfilename = $user->image;
        $user->image = $filename;
        storage::delete($oldfilename);
        }

      $user->update();
      return redirect()->back()->with('status', 'successfully updated');
      }
}
