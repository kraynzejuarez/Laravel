<?php

namespace App\Http\Middleware;



class Authenticate
{

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('home');
            }
        }
        return $next($request);
    }
}