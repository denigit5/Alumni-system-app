<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    // Display the portfolio creation form
    public function create()
    {
        return view('portfolio');
    }

    // Store the portfolio in the database with alumni_id
    public function store(Request $request)
    {
        // Validate request inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'bio' => 'required|string|max:1000',
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validate image file
            'intro_video' => 'nullable|mimetypes:video/mp4|max:10240', // Validate video file (max 10MB)
            'portfolio_files' => 'nullable|array', // Allow multiple portfolio files
            'portfolio_files.*' => 'file|mimes:pdf,doc,docx|max:5120', // Validate each file
        ]);

        // Handle file uploads
        $profileImagePath = null;
        $introVideoPath = null;
        $portfolioFilesPaths = [];

        // Upload profile image
        if ($request->hasFile('profile_image')) {
            $profileImage = $request->file('profile_image');
            $profileImagePath = $profileImage->store('profile_images', 'public');
        }

        // Upload intro video
        if ($request->hasFile('intro_video')) {
            $introVideo = $request->file('intro_video');
            $introVideoPath = $introVideo->store('intro_videos', 'public');
        }

        // Upload portfolio files
        if ($request->hasFile('portfolio_files')) {
            foreach ($request->file('portfolio_files') as $file) {
                $path = $file->store('portfolio_files', 'public');
                $portfolioFilesPaths[] = $path;
            }
        }

        // Create portfolio record with alumni_id
        Portfolio::create([
            'alumni_id' => auth('alumnus')->user()->id,
            'name' => $request->input('name'),
            'profession' => $request->input('profession'),
            'bio' => $request->input('bio'),
            'profile_image' => $profileImagePath,
            'intro_video' => $introVideoPath,
            'portfolio_files' => json_encode($portfolioFilesPaths), // Store as JSON array
        ]);

        return redirect()->back()->with('success', 'Portfolio created successfully');
    }

    // Display a specific portfolio
    public function show($uuid)
    {
        $portfolio = Portfolio::where('uuid', $uuid)->firstOrFail();
        return view('portfolio-view', compact('portfolio'));
    }

    // Edit a specific portfolio
    public function edit($uuid)
    {
        $portfolio = Portfolio::where('uuid', $uuid)->firstOrFail();
        return view('portfolio-edit', compact('portfolio'));
    }

    // Update a specific portfolio
    public function update(Request $request, $uuid)
    {
        $portfolio = Portfolio::where('uuid', $uuid)->firstOrFail();

        // Validate request inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'bio' => 'required|string|max:1000',
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'intro_video' => 'nullable|mimetypes:video/mp4|max:10240',
            'portfolio_files' => 'nullable|array',
            'portfolio_files.*' => 'file|mimes:pdf,doc,docx|max:5120',
        ]);

        // Handle file uploads
        if ($request->hasFile('profile_image')) {
            if ($portfolio->profile_image) {
                Storage::disk('public')->delete($portfolio->profile_image);
            }
            $portfolio->profile_image = $request->file('profile_image')->store('profile_images', 'public');
        }

        if ($request->hasFile('intro_video')) {
            if ($portfolio->intro_video) {
                Storage::disk('public')->delete($portfolio->intro_video);
            }
            $portfolio->intro_video = $request->file('intro_video')->store('intro_videos', 'public');
        }

        if ($request->hasFile('portfolio_files')) {
            $portfolioFilesPaths = [];
            foreach ($request->file('portfolio_files') as $file) {
                $path = $file->store('portfolio_files', 'public');
                $portfolioFilesPaths[] = $path;
            }
            $portfolio->portfolio_files = json_encode($portfolioFilesPaths);
        }

        // Update portfolio record
        $portfolio->update([
            'name' => $request->input('name'),
            'profession' => $request->input('profession'),
            'bio' => $request->input('bio'),
        ]);

        return redirect()->back()->with('success', 'Portfolio updated successfully');
    }

    // Delete a specific portfolio
    public function destroy($uuid)
    {
        $portfolio = Portfolio::where('uuid', $uuid)->firstOrFail();
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully');
    }
}