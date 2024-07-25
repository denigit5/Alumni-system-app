<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;

class AlumniRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.alumni-register');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        // Assign the alumni role to the user
        $user->assignRole('alumni');

        return $this->registered($request, $user)
                        ?: redirect()->route('alumni.dashboard');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registered(Request $request, $user)
    {
        // Redirect alumni to their dashboard
        return redirect()->route('alumni.dashboard');
    }
}
