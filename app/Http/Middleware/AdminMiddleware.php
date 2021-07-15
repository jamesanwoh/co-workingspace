<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::user()->role_as =='admin'){
          if(Auth::check()){
            $expiresAt = carbon::now()->addMinutes(1);
            cache::put('user-is-online'. Auth::user()->id, true, $expiresAt);
          }
       return $next($request);
       }
       elseif (Auth::user()->role_as =='vendor'){
        return $next($request);
       }
       else if(Auth::user()->role_as =='user'){
        return $next($request);
       }
       else{
        return false;
       }
    }
}
