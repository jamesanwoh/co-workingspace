<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'frontendController@frontend');

Route::get('about-Us', function () {
    return view('frontend.about-Us');
});
Route::get('contact-Us', 'contactusController@contact');

Route::get('services', 'serviceController@services');

Route::get('details/{id}','frontendController@details');

Route::get('schedule/{id}','frontendController@schedule');

Route::post('message','contactusController@messages');

Route::get('a', 'frontendController@categoryA');

Route::get('b', 'frontendController@categoryB');

Route::get('c', 'frontendController@categoryC');

Route::get('d', 'frontendController@categoryD');

Route::get('e', 'frontendController@categoryE');

Route::get('f', 'frontendController@categoryF');

Route::get('g', 'frontendController@categoryG');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>  ['auth', 'IsAdmin']], function(){
	Route::get('/dashboardAdmin', 'AdminController@index');

    Route::get('AdminProfile','AdminController@AdminProfile');

    Route::get('editAdmin','AdminController@editAdmin');

    Route::post('UpdateAdmin','Admin\ProfileUpdateController@UpdateAdmin');

	Route::post('profile_update','AdminController@update');

	Route::get('ManageBookings', 'AdminController@ManageBookings');

	Route::get('AllPayments', 'AdminController@AllPayments');

	Route::get('AllReports', 'AdminController@AllReports');

	Route::get('UsersRequest', 'AdminController@UsersRequest');

	Route::get('ChatWithVendor', 'AdminController@ChatWithVendor');

	Route::get('ChatWithUsers', 'AdminController@ChatWithUsers');

	Route::get('AllCompliant', 'AdminController@AllCompliant');

	Route::get('NewOpeningsBooking','Admin\ManageAllBookingsControlller@NewOpenings');
	Route::post('store','Admin\ManageAllBookingsControlller@store');

	Route::get('Delete_Booking/{id}','Admin\ManageAllBookingsControlller@Delete_Booking');
	Route::post('destroyBooking/{id}','Admin\ManageAllBookingsControlller@destroyBooking');

	Route::get('Update_Bookings/{id}','Admin\ManageAllBookingsControlller@Update_Bookings');
	Route::post('saveUpdate/{id}','Admin\ManageAllBookingsControlller@saveUpdate');

    Route::get('Complaints/{id}','AdminController@CloseComplaint');
	Route::get('ManageUsers1','Admin\ManagerUser1Controller@index');

	Route::get('role-editUser/{id}','Admin\ManagerUser1Controller@edit');
	Route::put('role-updateUser/{id}','Admin\ManagerUser1Controller@update');

	Route::get('role-addUser','Admin\ManagerUser1Controller@add');
	Route::put('role-store','Admin\ManagerUser1Controller@store');

	Route::get('role-deleteUser/{id}','Admin\ManagerUser1Controller@delete');
	Route::put('role-destroy/{id}','Admin\ManagerUser1Controller@destroy');

	Route::get('ManageVendors','Admin\ManageVendorsController@index');

	Route::get('role-edit/{id}','Admin\ManageVendorsController@edit');
	Route::put('role-update/{id}','Admin\ManageVendorsController@update');

	Route::get('role-add','Admin\ManageVendorsController@add');
	Route::put('role-store','Admin\ManageVendorsController@store');

	Route::get('role-deleteVendor/{id}','Admin\ManageVendorsController@delete');
	Route::put('role-destroy/{id}','Admin\ManageVendorsController@destroy');


});

Route::group(['middleware' =>  ['auth', 'IsVendor']], function(){
	Route::get('/dashboardVendor', 'VendorController@index');

	Route::get('VendorProfile', 'VendorController@VendorProfile');

	Route::post('Update', 'vendor\ProfileUpdateController@Update');

	//Route::get('Export/{id}','vendor\ManageBookingsController@Export');

	Route::get('Manage_bookings','VendorController@bookings');

	Route::get('CloseComplaints/{id}','VendorController@CloseComplaints');

    Route::get('editVendor','VendorController@editVendor');

	Route::get('New_Openings','VendorController@New_Openings');
	Route::post('store','vendor\ManageBookingsController@store');

	Route::get('Delete_Bookings/{id}','vendor\ManageBookingsController@delete');
	Route::put('destroy/{id}','vendor\ManageBookingsController@destroy');

	Route::get('edit_Booking/{id}','vendor\ManageBookingsController@edit');
	Route::post('update_Booking/{id}','vendor\ManageBookingsController@update');

	Route::get('Payments','VendorController@Payments');

	Route::get('Reports','VendorController@Reports');
	Route::get('Compliant/Enquires','VendorController@Compliant_Enquires');
	Route::get('Users_Request','VendorController@Users_Request');
	Route::get('Chat_with_AdminbyVendor','VendorController@Chat_with_Admin');

});

	Route::group(['middleware' =>  ['auth', 'IsUser']], function(){

	Route::get('/dashboardUser', 'userController@index');

    Route::get('UserProfile','UserController@UserProfile');

    Route::get('editUser','UserController@editUser');

    Route::post('UserUpdate','user\UserUpdateController@UserUpdate');

    Route::post('User_update','user\ProfileUpdateController@update');

    Route::get('User_bookings','user\bookingsController@bookings');

    Route::get('User_payments','user\paymentController@paymentts');

    Route::get('User_payments/{id}','userController@payments');
    Route::get('User_enquires','user\NewCompliantController@enquires');
    Route::get('New_Complaint','user\NewCompliantController@New_Compliant');

    Route::get('UserRequestId/{id}','user\NewRequestController@UserRequestId');

    Route::get('UserRequest','user\NewRequestController@UserRequest');

    Route::post('ClickHereToProceed','user\NewRequestController@ClickHereToProceed');

    Route::post('PaymentProceed','user\bookingsController@PaymentProceed');

    Route::get('Make_payment_Now/{id}','user\MakePaymentNowController@Make_payment_Now');

    Route::post('New_CompliantProcess','user\NewCompliantController@New_CompliantProcess');

    Route::get('User_ChatAdmin','user\ChatWithAdminController@ChatAdmin');

});
