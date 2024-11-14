<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the jobs.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch jobs from the database and paginate
        $jobs = Job::paginate(9); // Adjust the number of jobs per page

        // Return the jobs.index view with the jobs data
        return view('job_search', compact('jobs'));
    }

    /**
     * Display the specified job details.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Fetch the specific job from the database
        $job = Job::findOrFail($id);

        // Return the job details view
        return view('job_details', compact('job'));
    }

    /**
     * Show the form for applying to the specified job.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function apply($id)
    {
        // Fetch the specific job from the database
        $job = Job::findOrFail($id);

        // Return the application form view
        return view('jobs_apply', compact('job'));
    }

    /**
     * Handle job application submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitApplication(Request $request, $id)
    {
        // Validate application input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        // Logic to store application data (e.g., save resume, email notification, etc.)

        // Example: Redirect back with a success message
        return redirect()->route('jobs.show', $id)->with('success', 'Your application has been submitted successfully!');
    }
}
