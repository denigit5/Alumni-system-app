<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUser
{
    public function handle(Request $request, Closure $next, $type)
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login');
        }

        switch ($type) {
            case 'superuser':
                if ($user->is_superuser) {
                    return $next($request);
                }
                break;
            case 'admin':
                if ($user->is_admin) {
                    return $next($request);
                }
                break;
            case 'alumni':
                if ($user->is_alumni) {
                    return $next($request);
                }
                break;
            case 'employer':
                if ($user->is_employer) {
                    return $next($request);
                }
                break;
            default:
                break;
        }

        // Redirect to homepage or an error page if the user doesn't match the type
        return redirect()->route('welcome')->withErrors(['error' => 'Unauthorized access.']);
    }
}
