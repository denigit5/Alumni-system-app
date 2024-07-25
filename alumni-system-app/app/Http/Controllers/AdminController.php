<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Portfolio;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function postJobs()
    {
        $jobs = Job::all();

        return view('admin.post_jobs', compact('jobs'));
    }

    public function storeJob(Request $request)
    {
        $validatedData = $request->validate([
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'job_requirements' => 'required|string',
        ]);

        Job::create([
            'title' => $validatedData['job_title'],
            'description' => $validatedData['job_description'],
            'requirements' => $validatedData['job_requirements'],
        ]);

        return redirect()->route('admin.postJobs')->with('success', 'Job posted successfully!');
    }

    public function manageJobPostings()
    {
        $jobs = Job::all();
        return view('admin.manage_job_postings', compact('jobs'));
    }

    public function editJob($id)
    {
        $job = Job::findOrFail($id);
        return view('admin.edit_job', compact('job'));
    }

    public function updateJob(Request $request, $id)
    {
        $validatedData = $request->validate([
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'job_requirements' => 'required|string',
        ]);

        $job = Job::findOrFail($id);
        $job->update([
            'title' => $validatedData['job_title'],
            'description' => $validatedData['job_description'],
            'requirements' => $validatedData['job_requirements'],
        ]);

        return redirect()->route('admin.manage-job-postings')->with('success', 'Job updated successfully!');
    }

    public function deleteJob($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('admin.manage-job-postings')->with('success', 'Job deleted successfully!');
    }

    public function moderateContent()
    {
        // Fetch all portfolios (or relevant content) for moderation
        $portfolios = Portfolio::all(); // Adjust model as per your actual implementation

        return view('admin.moderate_content', compact('portfolios'));
    }

    // Add other methods as needed
}
