<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function showAlumniLoginForm()
    {
        return view('auth.alumni-login');
    }

    public function showEmployerLoginForm()
    {
        return view('auth.employer-login');
    }

    public function showSuperUserLoginForm()
    {
        return view('auth.superuser-login');
    }

    public function showAdminLoginForm()
    {
        return view('auth.admin-login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            switch ($user->role) {
                case 'alumni':
                    return redirect()->route('alumni.dashboard');
                case 'employer':
                    return redirect()->route('employer.dashboard');
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'superuser':
                    return redirect()->route('superuser.dashboard');
                default:
                    Auth::logout();
                    return redirect()->route('welcome')->withErrors(['error' => 'Invalid role.']);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
