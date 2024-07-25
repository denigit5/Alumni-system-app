<?php

// app/Http/Controllers/Auth/AdminLoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to admin dashboard
            return redirect()->route('admin.dashboard');
        }

        // Authentication failed, redirect back with error
        return redirect()->route('admin.login-form')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
