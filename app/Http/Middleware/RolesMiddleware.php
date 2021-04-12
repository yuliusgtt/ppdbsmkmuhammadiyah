<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole($role)) {
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
