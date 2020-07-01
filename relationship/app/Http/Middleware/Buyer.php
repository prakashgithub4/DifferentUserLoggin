<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class Buyer
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
        if(!Auth::check() || Auth::user()->usertype != 1){
            return redirect('/login');
        }
        return $next($request);
    }
}
