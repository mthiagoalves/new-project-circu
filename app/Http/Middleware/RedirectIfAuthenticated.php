<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/');
        // }

        // return $next($request);
        if(Auth::guard($guard)->check() && Auth::User()->user_level_id != 4){
            return $next($request);
        }
        elseif(Auth::guard($guard)->check() && Auth::User()->user_level_id == 2) {
            return $next($request);
        }
        else {
            return redirect()->route('press'); 
        }

    }
}
