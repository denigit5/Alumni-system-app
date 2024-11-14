<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Alumnus;
use App\Models\Employer;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the alumnus or employer profile form.
     */
    public function edit(Request $request): View
{
    // Check if the user is authenticated as an alumnus or employer
    if (Auth::guard('alumnus')->check()) {
        $user = Auth::guard('alumnus')->user(); // Get the alumnus user data
    } elseif (Auth::guard('employer')->check()) {
        $user = Auth::guard('employer')->user(); // Get the employer user data
    } else {
        // If the user is not authenticated, redirect to login or home page
        return redirect()->route('login');
    }

    // Return the view with the appropriate user data
    return view('profile.edit', [
        'user' => $user,
    ]);
}


    /**
     * Display the alumnus or employer profile.
     */
    public function show(Request $request): View
    {
        $user = $request->user();
        $profile = $user instanceof Alumnus ? $user : $user->employer;

        return view('profile.show', [
            'profile' => $profile,
        ]);
    }

    /**
     * Update the alumnus or employer profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        if ($user instanceof Alumnus) {
            $user->fill($request->validated());
            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }
            $user->save();
        } elseif ($user instanceof Employer) {
            $user->fill($request->validated());
            if ($user->isDirty('email')) {
                $user->email_verified_at = null;
            }
            $user->save();
        }

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the alumnus or employer account.
     */
    public function destroy(Request $request): RedirectResponse
{
    // Validate the password for user deletion
    $request->validateWithBag('userDeletion', [
        'password' => ['required', 'current_password'],
    ]);

    $user = $request->user(); // Get the current authenticated user

    // Log the user out
    Auth::logout();

    // Delete the user from the database
    $user->delete();

    // Invalidate the session and regenerate the CSRF token
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Future flexibility for role-based redirection
    if ($user->role === 'alumnus') {
        // Redirect or additional logic for Alumni (if needed in the future)
        return Redirect::to('/');
    } elseif ($user->role === 'employer') {
        // Redirect or additional logic for Employers (if needed)
        return Redirect::to('/');
    }

    // Default redirection for all users (or a general homepage)
    return Redirect::to('/');
}

    /**
     * Handle photo uploads for the alumnus or employer profile.
     */
    public function uploadPhotos(Request $request): RedirectResponse
    {
        $request->validate([
            'photos' => 'required|image|max:2048',
        ]);

        $user = $request->user();
        $path = $request->file('photos')->store('profile_photos', 'public');

        if ($user instanceof Alumnus) {
            $user->photo_path = $path;
            $user->save();
        } elseif ($user instanceof Employer) {
            $user->photo_path = $path;
            $user->save();
        }

        return Redirect::route('profile.edit')->with('status', 'photo-uploaded');
    }
}
