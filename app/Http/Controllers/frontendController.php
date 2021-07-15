<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bookings;

class frontendController extends Controller
{
    public function frontend()
     {
        $posts= bookings::all();
        $categoryc =  bookings::where('category', 'cooperate/ professional')->get();
        $categorya =  bookings::where('category', 'conventional/ open conventional')->get();
        $categoryd =  bookings::where('category', 'private work space')->get();

        return view('frontend.index')
        ->with('posts', $posts)
        ->with('categoryc', $categoryc)
        ->with('categorya', $categorya)
        ->with('categoryd', $categoryd);
      }

      public function details($id)
     {
            $details = bookings::find($id);
            return view ('frontend.details')->with('details', $details);

      }
      public function schedule($id)
      {
             $details = bookings::find($id);
             return view ('frontend.details')->with('details', $details);

       }

      public function categoryA()
      {
        $categorya =  bookings::where('category', 'conventional/ open conventional')->get();
        return view ('frontend.frontend-categories.a')->with('categorya',$categorya);
      }
      public function categoryB()
      {
        $categoryb =  bookings::where('category', 'high-end/ full service')->get();
        return view ('frontend.frontend-categories.b')->with('categoryb',$categoryb);
      }
      public function categoryC()
      {
        $categoryc =  bookings::where('category', 'cooperate/ professional')->get();
        return view ('frontend.frontend-categories.c')->with('categoryc',$categoryc);
      }
      public function categoryD()
      {
        $categoryd =  bookings::where('category', 'private work space')->get();
        return view ('frontend.frontend-categories.d')->with('categoryd',$categoryd);
      }
      public function categoryE()
      {
        $categorye =  bookings::where('category', 'minmal/bare bone')->get();
        return view ('frontend.frontend-categories.e')->with('categorye',$categorye);
      }
      public function categoryF()
      {
        $categoryf =  bookings::where('category', 'shared space/ subline')->get();
        return view ('frontend.frontend-categories.f')->with('categoryf',$categoryf);
      }
      public function categoryG()
      {
        $categoryg =  bookings::where('category', 'Industrial specific/ specializied')->get();
        return view ('frontend.frontend-categories.g')->with('categoryg',$categoryg);
      }

}
