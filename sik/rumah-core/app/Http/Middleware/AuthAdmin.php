<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::user() OR !Auth::user()->hasRole('super admin|admin inovasi|admin biro provinsi|admin biro kabupaten|admin bagian kabupaten')) {
            return redirect('/');
        }
        return $next($request);
    }
}
