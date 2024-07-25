<?php

// app/Http/Middleware/RedirectIfNotAdmin.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class RedirectIfNotAdmin
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || !Auth::user()->hasRole('admin')) {
            return redirect()->route('admin.login-form');
        }

        return $next($request);
    }
}