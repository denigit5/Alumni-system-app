<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function submit(Request $request, $jobId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'resume' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        JobApplication::create([
            'job_id' => $jobId,
            'alumnus_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'resume' => $resumePath,
        ]);

        return redirect()->route('jobs.show', $jobId)->with('status', 'Application submitted successfully!');
    }
}

