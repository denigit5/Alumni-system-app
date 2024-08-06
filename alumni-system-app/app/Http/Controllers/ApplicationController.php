<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create()
    {
        return view('applications.create'); // Create a Blade view for this
    }

    public function index()
    {
        return view('applications.index'); // Create a Blade view for this
    }
}
