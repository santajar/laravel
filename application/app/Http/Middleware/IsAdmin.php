<?php

namespace App\Http\Middleware;
use Illuminate\Http\RedirectResponse;

use Closure;

class IsAdmin
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
      if (session('status') === 'admin')
      {
        return $next($request);
      }
      return new RedirectResponse(url('/'));
    }
}
