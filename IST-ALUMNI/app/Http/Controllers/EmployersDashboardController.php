<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnus;
use Illuminate\Support\Facades\Auth;
use App\Models\JobApplication;

class EmployersDashboardController extends Controller
{
    public function dashboard()
    {
        // Retrieve the authenticated employer
        $employers = Auth::guard('employer')->user();

        // Pass data to the employer dashboard view
        return view('employers.dashboard', compact('employers'));
    }

    public function viewApplicants()
    {
        // Get alumni who have submitted job applications
        $alumniWithApplications = Alumnus::whereHas('jobApplications')->get();

        return view('employers.view-applicants', compact('alumniWithApplications'));
    }

    public function viewProjects()
    {
        // Fetch projects data here (assuming projects are stored in the database)
        // Example placeholder data
        $projects = [
            ['title' => 'Project Alpha', 'status' => 'Completed', 'created_at' => now()->subMonths(2)],
            ['title' => 'Project Beta', 'status' => 'Ongoing', 'created_at' => now()->subWeeks(4)],
        ];

        return view('employers.view_projects', compact('projects'));
    }

    public function viewAnalytics()
    {
        // Fetch analytics data here
        $analytics = [
            'totalAlumni' => 150,
            'jobsPosted' => 45,
            'applicationsReceived' => 120,
            'topCompanies' => [
                ['name' => 'Tech Corp', 'count' => 30],
                ['name' => 'Innovate Ltd', 'count' => 25],
                ['name' => 'Global Solutions', 'count' => 20],
            ],
        ];

        return view('employers.view_analytics', compact('analytics'));
    }

    public function createJob()
    {
    // Code to handle job creation or display a form for creating jobs
    return view('employers.create_job');
    }

    public function talentDiscovery()
    {
    // Fetch alumni portfolios and projects for talent discovery
    // Example: $portfolios = Alumnus::with('projects')->get();
    return view('employers.talent_discovery');  // Create this view file
    }

    public function jobMatching()
    {
    // Fetch job matching data here
    // Example: $matches = Job::with('matchingAlumni')->get();
    return view('employers.job_matching');  // Create this view file
    }

}
