<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    // Show the Alumni login form
    public function createAlumni()
    {
        return view('auth.alumni-login');
    }

    // Handle Alumni login
    public function storeAlumni(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to authenticate with the 'alumnus' guard
        if (Auth::guard('alumnus')->attempt($request->only('email', 'password'))) {
            $alumnus = Auth::guard('alumnus')->user();

            // Store Alumni data in the session
            session([
                'alumnus_data' => [
                    'name' => $alumnus->name,
                    'avatar' => $alumnus->avatar,
                    'email' => $alumnus->email,
                    'graduation_year' => $alumnus->graduation_year,
                ]
            ]);

            // Redirect to alumni dashboard
            return redirect()->route('alumni.dashboard')->with('status', 'Successfully logged in.');
        }

        // If login fails
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    // Show the Employer login form
    public function showEmployersLoginForm()
    {
        return view('auth.employers-login');
    }

    // Handle Employer login
    public function storeEmployers(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to authenticate with the 'employer' guard
        if (Auth::guard('employer')->attempt($request->only('email', 'password'))) {
            $employer = Auth::guard('employer')->user();

            // Store Employer data in the session
            session([
                'employer_data' => [
                    'name' => $employer->name,
                    'avatar' => $employer->avatar,
                    'email' => $employer->email,
                    'company_name' => $employer->company_name,
                ]
            ]);

            // Redirect to employer dashboard
            return redirect()->route('employers.dashboard')->with('status', 'Successfully logged in.');
        }

        // If login fails
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    // Redirect based on user type after login
    protected function authenticated(Request $request, $user)
    {
        if ($user->hasRole('alumni')) {
            return redirect()->route('alumni.dashboard');
        }

        if ($user->hasRole('employer')) {
            return redirect()->route('employer.dashboard');
        }

        return redirect()->route('home'); // Fallback route
    }

    // Handle logout for Alumni
    public function destroy(Request $request)
    {
        // Check if the user is logged in as 'alumnus'
        if (Auth::guard('alumnus')->check()) {
            Auth::guard('alumnus')->logout();
        } 
        // Check if the user is logged in as 'employer'
        elseif (Auth::guard('employer')->check()) {
            Auth::guard('employer')->logout();
        }

        // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to the homepage or a specific route
        return redirect()->route('/')->with('status', 'Successfully logged out.');
    }
}