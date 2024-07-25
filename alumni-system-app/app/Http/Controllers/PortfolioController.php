<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        // Fetch all portfolios from the database
        $portfolios = Portfolio::all();

        // Pass portfolios data to the view
        return view('portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        // Return a view to create a new portfolio (if needed)
        return view('portfolio.create');
    }

    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'nullable|url',
            'image_url' => 'nullable|url',
            'user_id' => 'required|exists:users,id',
        ]);

        // Create a new portfolio entry
        Portfolio::create($validatedData);

        // Redirect back with success message or to another route
        return redirect()->route('portfolio.index')->with('success', 'Portfolio created successfully!');
    }

    public function edit(Portfolio $portfolio)
    {
        // Return a view to edit an existing portfolio
        return view('portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'nullable|url',
            'image_url' => 'nullable|url',
            'user_id' => 'required|exists:users,id',
        ]);

        // Update the portfolio entry
        $portfolio->update($validatedData);

        // Redirect back with success message or to another route
        return redirect()->route('portfolio.index')->with('success', 'Portfolio updated successfully!');
    }

    public function destroy(Portfolio $portfolio)
    {
        // Delete the portfolio entry
        $portfolio->delete();

        // Return a response (e.g., JSON response for AJAX)
        return response()->json(['message' => 'Portfolio deleted successfully']);
    }
}
