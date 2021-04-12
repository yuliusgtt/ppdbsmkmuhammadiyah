<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->hasRole('Siswa')) {
                return redirect(route('siswa.dashboard'));
            } else if (Auth::user()->hasRole('Admin')) {
                return redirect(route('admin.dashboard'));
            } else {
                return redirect(route('logout'));
            }
        }

        return $next($request);
    }
}
