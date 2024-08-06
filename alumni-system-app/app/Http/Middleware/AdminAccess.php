<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAccess
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user's email matches the allowed admin email
        if (Auth::check() && Auth::user()->email === 'denysemukiza@gmail.com') {
            return $next($request);
        }

        // If not, redirect to home or any other page
        return redirect('/');
    }
}
