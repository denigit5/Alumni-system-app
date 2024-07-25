<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        return view('employers.dashboard');
    }

    public function create()
    {
        return view('employers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'contact_name' => 'required',
            'contact_email' => 'required|email',
        ]);

        Employer::create($request->all());
        return redirect()->route('employers.index')->with('success', 'Employer added successfully.');
    }

    public function show($id)
    {
        $employer = Employer::findOrFail($id);
        $alumni = User::all(); // List all alumni
        return view('employers.show', compact('employer', 'alumni'));
    }

    // Add other methods as needed
}
