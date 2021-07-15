<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookings;

class serviceController extends Controller
{
    public function services()
    {


        $servicesa = bookings::where('category', 'conventional/ open conventional')->get();
        $servicesb = bookings::where('category', 'high-end/ full service')->get();
        $servicesc = bookings::where('category', 'cooperate/ professional')->get();
        $servicesd = bookings::where('category', 'private work space')->get();
        $servicese = bookings::where('category', 'minimal/ bare bone')->get();
        $servicesf = bookings::where('category', 'shared space/ subline')->get();
        $servicesg = bookings::where('category', 'Industrial specific/ specializied')->get();


        return view('frontend.services')
        ->with('servicesa',$servicesa)
        ->with('servicesb',$servicesb)
        ->with('servicesc',$servicesc)
        ->with('servicesd',$servicesd)
        ->with('servicese',$servicese)
        ->with('servicesf',$servicesf)
        ->with('servicesg',$servicesg);
    }
}
