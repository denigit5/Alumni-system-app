<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    // Show the registration form for Alumni
    public function createAlumni()
    {
        return view('auth.alumni-register');
    }

    // Store the Alumni registration
    public function storeAlumni(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Assign the 'alumni' role to the user
        $user->assignRole('alumni');

        // Automatically login the user after registration
        Auth::login($user);

        return redirect()->route('alumni.dashboard');
    }

    // Show the registration form for Employer
    public function createEmployer()
    {
        return view('auth.employer-register');
    }

    // Store the Employer registration
    public function storeEmployer(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Assign the 'employer' role to the user
        $user->assignRole('employer');

        // Automatically login the user after registration
        Auth::login($user);

        return redirect()->route('employer.dashboard');
    }

    // Validation rules for registration
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
}

