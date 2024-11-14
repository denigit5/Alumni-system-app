<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlumniController extends Controller
{

    public function dashboard()
    {
        // Retrieve the authenticated alumni
        $alumni = Auth::guard('alumnus')->user();

        // Pass data to the alumni dashboard view
        return view('alumni.dashboard', compact('alumni'));
    }
}

