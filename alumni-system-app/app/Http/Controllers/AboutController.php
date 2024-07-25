<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Show the About Us page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('alumni.about');
    }
}
