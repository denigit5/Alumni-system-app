<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthenticatedSessionController extends Controller
{
    public function showEmployerLoginForm()
    {
        return view('auth.employer-login');
    }

    public function showAlumniLoginForm()
    {
        return view('auth.alumni-login');
    }

    public function showAdminLoginForm()
    {
        return view('auth.admin-login');
    }

    public function showSuperuserLoginForm()
    {
        return view('auth.superuser-login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            Log::info('User logged in:', ['user' => $user]);

            if ($user->hasRole('employer')) {
                return redirect()->route('employer.dashboard');
            } elseif ($user->hasRole('alumni')) {
                return redirect()->route('alumni.dashboard');
            } elseif ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('superuser')) {
                return redirect()->route('superuser.dashboard');
            } else {
                Auth::logout();
                return redirect()->route('welcome')->withErrors(['error' => 'Invalid user role.']);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
