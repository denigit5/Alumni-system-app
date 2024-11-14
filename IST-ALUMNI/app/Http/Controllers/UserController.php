<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Handle the avatar upload for Alumni only.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function uploadAvatar(Request $request)
    {
        // Validate the uploaded avatar file
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if alumnus is authenticated (only alumni can upload avatars)
        if (Auth::guard('alumnus')->check()) {
            $user = Auth::guard('alumnus')->user();
        } else {
            return redirect()->back()->withErrors('Only alumni can upload avatars.');
        }

        // Delete the old avatar if it exists
        if ($user->avatar) {
            Storage::delete('public/' . $user->avatar);
        }

        // Store the new avatar file and update the user's avatar path
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
        $user->avatar = $avatarPath;

        // Ensure the $user model supports saving
        if (method_exists($user, 'save')) {
            $user->save();
        } else {
            return redirect()->back()->withErrors('Error saving user data');
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'Avatar updated successfully.');
    }
}

