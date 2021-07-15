<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class VendorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if(Auth::user()->role_as =='vendor'){
       return $next($request);
       }
       elseif (Auth::user()->role_as =='admin'){
        return $next($request);
       }
       else if(Auth::user()->role_as =='user'){
        return $next($request);
       }
       else{
        return redirect('/home')->with('status', 'You are not allowed to access this page');
       }
    }
}
