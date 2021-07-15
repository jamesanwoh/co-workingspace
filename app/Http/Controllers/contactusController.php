<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use DB;

class contactusController extends Controller
{
    public function contact()
    {
        return view('frontend.contact-Us');
    }
    public function messages(Request $request)
    {
        	$firstname = $request->input('firstname');
        	$lastname = $request->input('lastname');
        	$email = $request->input('email');
        	$phonenumber = $request->input('phonenumber');
        	$message = $request->input('message');


        	DB::insert('insert into messages (firstname,lastname,email,phonenumber,message) values (?,?,?,?,?)', [$firstname, $lastname, $email, $phonenumber, $message]);

        	return redirect()->back()->with('status', 'your message has successfully being sent');
    }
}
