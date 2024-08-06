<?php

namespace App\Http\Controllers;
use App\Models\Alumni;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function dashboard()
    {
        return view('employer.dashboard');
    }

    public function talentDiscovery()
    {
       $alumni = User::where('role', 'alumni')->get();
       return view('employer.talentDiscovery', compact('alumni'));
    }

    public function jobMatching()
    {
        // Fetch jobs and match with alumni profiles
        $jobs = Job::all();
        return view('employer.jobMatching', compact('jobs'));
    }

    public function postJob()
    {
        return view('employer.postJob');
    }

    public function profile()
    {
        return view('employer.profile');
    }

    public function settings()
    {
        return view('employer.settings');
    }
}
