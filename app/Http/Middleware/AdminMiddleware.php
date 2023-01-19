<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::user()->role_as == '1')
        {
            return redirect('/beranda');
        }
        return $next($request);
    }
}