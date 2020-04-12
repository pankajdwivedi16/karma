<?php

namespace App\Http\Middleware;

use Closure; use \Auth;

class Authenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , $guard=null )
    {

        return Auth::guard( $guard )->check() ? $next($request) : redirect('signin') ;

    }

}
