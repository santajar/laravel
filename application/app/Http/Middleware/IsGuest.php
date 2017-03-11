<?php

namespace App\Http\Middleware;
use Illuminate\Http\RedirectResponse;

use Closure;

class IsGuest
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
      if (session('status') === 'guest')
      {
        return $next($request);
      }
      return new RedirectResponse(url('/'));
    }
}
