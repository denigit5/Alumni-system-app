<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AlumniLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/alumni/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.alumni-login');
    }

    protected function guard()
    {
        return Auth::guard('web');
    }
}
