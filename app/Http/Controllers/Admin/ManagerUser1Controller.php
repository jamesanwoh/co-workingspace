<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use DB;

class ManagerUser1Controller extends Controller
{
    public function index(){
        $user1 =  User::where('role_as', 'user')->get();
    	return view('admin.user1.index')->with('user1', $user1);
    }
    	public function edit($id){
    	$user_role = User::find($id);
    	return view('admin.user1.edit')->with('user_role', $user_role);
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
    	return view('admin.user1.add');
    }
    public function store(Request $request){
    	$this->validate($request,[
    		'Username' => 'required','Firstname'=> 'required','Lastname' => 'required','role_as' => 'required','email' => 'required','password' => 'required','gender' => 'required','phone_number' => 'required','Address' => 'required'
    	]);
    	$user = new User;
    	$user->Username = $request->Username;
    	$user->Firstname = $request->Firstname;
    	$user->Lastname = $request->Lastname;
    	$user->role_as = $request->role_as;
    	$user->email = $request->email;
    	$user->gender = $request->gender;
    	$user->phone_number = $request->phone_number;
    	$user->Address = $request->Address;
    	$user->password = $request->password;
    	$user->save();
    	return redirect()->back()->with('status', 'successfully added');
    }

    public function delete($id){
    	$user_role = User::find($id);
    	return view('admin.user1.delete')->with('user_role', $user_role);
    }


    public function destroy($id){
    	DB::delete('delete from users where id = ?',[$id]);
    	return redirect('/dashboardAdmin')->with('status', 'successfully deleted');
    	//return view('admin.dashboard')->with('status', 'successfully deleted');
    	//echo "record successfully deleted";
    	//echo "<button onclick="location.href='layouts.admin' "click here </button>to go back";
    	/*$user_role = User::find($id);
    	return view('admin.user.delete')->with('user_role', $user_role);*/




    }
}
