<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;

class CheckLoginAdmin
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
        if(Auth::user())
        {
            return $next($request);
        }
        return redirect()->route('signin');
    }
}
