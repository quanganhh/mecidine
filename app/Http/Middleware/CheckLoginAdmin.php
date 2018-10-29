<?php

namespace App\Http\Middleware;

use Closure;
use Session;

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
        $id =  $this->getSessionIdAdmin();
    	$email = $this->getSessionEmailAdmin();
        if ($id <= 0 || $email == '') {
            return redirect()->route('login');
        }
        return $next($request);
    }

    private function getSessionUserAdmin()
    {
        $username = Session::get('username');
        return $username;
    }

    private function getSessionIdAdmin()
    {
        $id = Session::get('id');
        $id = is_numeric($id) ? $id : 0;
        return $id;
    }

    private function getSessionEmailAdmin()
    {
        $email = Session::get('email');
        return $email;
    }
}
