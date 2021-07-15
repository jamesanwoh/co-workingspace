<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\vendor1;
use App\User;
use DB;

class ManageVendorsController extends Controller
{
    public function index(){
    	$vendor1 = User::where('role_as', 'vendor')->get();
    	return view('admin.vendor1.index')->with('vendor1', $vendor1);
    }
     public function edit($id){
    	$user_role = User::find($id);
        //dd($user_role);
    	return view('admin.vendor1.edit')->with('user_role', $user_role);
    }
    public function update(Request $request, $id){
    	$user = User::find($id);
    	$user->Username = $request->input('Username');
    	$user->Firstname = $request->input('Firstname');
    	$user->Lastname = $request->input('Lastname');
    	$user->role_as = $request->input('role_as');
    	$user->password = $request->input('password');
    	$user->update();

    	return redirect()->back()->with('status', 'successfully updated');
    }
    public function add(){
    	return view('admin.vendor1.add');
    }
    public function store(Request $request){

        $Username = $request->input('Username');
          $Firstname = $request->input('Firstname');
          $Lastname = $request->input('Lastname');
          $role_as = $request->input('role_as');
          $email = $request->input('email');
          $gender = $request->input('gender');
          $phone_number = $request->input('phone_number');
          $Address = $request->input('Address');
          $password = $request->input('password');

         // $checker = newBookings::select('RoomName','RoomSize')->where('RoomName', $request->input('RoomName'))->get();
          //if($checker === null){
         DB::insert('insert into users (Username,Firstname,Lastname,role_as,email,gender,phone_number,Address,password) values (?,?,?,?,?,?,?,?,?)', [$Username, $Firstname, $Lastname, $role_as, $email,$gender,$phone_number,$Address,$password]);

          return redirect()->back()->with('status', 'successfully added');
        }

    public function delete($id){
    	$user_role = User::find($id);
    	return view('admin.vendor1.delete')->with('user_role', $user_role);
    }
    public function destroy($id){
    	DB::delete('delete from users where id = ?',[$id]);
    	return redirect('/dashboardAdmin')->with('status', 'successfully deleted');
    }
   }
