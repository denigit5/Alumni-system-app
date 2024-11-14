<?php

// app/Http/Controllers/ProjectController.php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'project_files' => 'nullable|array|max:5', // Max 5 files
            'project_files.*' => 'file|mimes:jpeg,png,jpg,pdf,docx|max:10240', // Max 10MB each
            'github_link' => 'nullable|url', // Validate GitHub link
        ]);

        // Store the uploaded files (if any)
        $filePaths = [];
        if ($request->hasFile('project_files')) {
            foreach ($request->file('project_files') as $file) {
                $filePaths[] = $file->store('projects'); // Store in 'projects' directory
            }
        }

        // Create the project entry in the database
        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->github_link = $request->input('github_link'); // Store GitHub link
        $project->files = json_encode($filePaths); // Store file paths as JSON
        $project->save();

        // Redirect or return response
        return redirect()->route('projects')->with('success', 'Project successfully uploaded!');
    }
}
