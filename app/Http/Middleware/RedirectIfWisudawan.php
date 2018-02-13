<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfWisudawan
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'wisudawan')
	{
	    if (Auth::guard($guard)->check()) {
	        return redirect('wisudawan/home');
	    }

	    return $next($request);
	}
}