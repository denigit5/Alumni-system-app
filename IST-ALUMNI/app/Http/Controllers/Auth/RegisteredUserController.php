<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumnus;
use App\Models\Employer; 
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
        $this->validator($request->all(), 'alumni')->validate();

        $alumnus = Alumnus::create([
            'name' => $request->name,
            'email' => $request->email,
            'graduation_year' => $request->graduation_year,
            'password' => Hash::make($request->password),
        ]);

        // Automatically login the alumnus after registration
        Auth::guard('alumnus')->login($alumnus);

        // Redirect to the alumni dashboard
        return redirect()->route('alumni.dashboard'); 
    }

    // Show the registration form for Employer
    public function createEmployers()
    {
        return view('auth.employers-register');
    }

    // Store the Employer registration
    public function storeEmployers(Request $request)
    {
        $this->validator($request->all(), 'employer')->validate();

        $employer = Employer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Automatically login the employer after registration
        Auth::guard('employer')->login($employer);

        // Redirect to the employer dashboard
        return redirect()->route('employers.dashboard'); 
    }

    // Validation rules for registration
    protected function validator(array $data, $type)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        if ($type === 'alumni') {
            $rules['graduation_year'] = ['required', 'string'];
            $rules['email'][] = 'unique:alumni';
        } elseif ($type === 'employer') {
            // No 'company' field validation here
            $rules['email'][] = 'unique:employers';
        }

        return Validator::make($data, $rules);
    }
}