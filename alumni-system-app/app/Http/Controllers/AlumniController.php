<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Portfolio;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlumniController extends Controller
{
    /**
     * Display the alumni dashboard.
     */
    public function dashboard()
    {
        return view('alumni.dashboard');
    }

    /**
     * Show the form for creating a new portfolio.
     */
    public function createPortfolio()
    {
        return view('alumni.create_portfolio');
    }

    /**
     * Store a newly created portfolio in storage.
     */
    public function storePortfolio(Request $request)
    {
        // Validate the form data
        $request->validate([
            'basic_info' => 'required',
            'education' => 'required',
            'work_experience' => 'required',
            'skills' => 'required',
        ]);

        // Redirect to the dashboard with a success message
        return redirect()->route('alumni.dashboard')->with('success', 'Portfolio created successfully.');
    }

    /**
     * Show the form for creating a new project.
     */
    public function createProject()
    {
        return view('alumni.create_project');
    }

    /**
     * Store a newly created project in storage.
     */
    public function storeProject(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Redirect to the dashboard with a success message
        return redirect()->route('alumni.dashboard')->with('success', 'Project created successfully.');
    }
    public function editProjects()
    {
        return view('alumni.edit-projects');
    }
    public function deleteProjects()
    {
        return view('alumni.delete-projects');
    }

    /**
     * Display the form for publishing projects.
     */
    public function publishProjects()
    {
        return view('alumni.publish_projects');
    }

    /**
     * Display a listing of the jobs.
     */
    /**
     * Apply for a job.
     */
    public function applyForJobs()
    {
        return view('alumni.apply-for-jobs');
    }

    public function viewProfile()
    {
        return view('profile.show');
    }

    public function editProfile()
    {
        return view('profile.edit');
    }

    public function viewOwnApplications()
    {
        return view('alumni.view-applications');
    }
    public function ViewJobs()
    {
        $jobs = Job::all(); // Assuming you have a Job model
        return view('alumni.jobs', compact('jobs'));
    }
    public function viewJobDetails($id)
    {
        $job = Job::findOrFail($id);
        return view('alumni.job-details', compact('job'));
    }

    // Add other methods as needed
}
