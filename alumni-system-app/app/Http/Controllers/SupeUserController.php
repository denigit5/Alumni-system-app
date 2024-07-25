<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;

class SuperuserController extends Controller
{
    public function index()
    {
        return view('superuser.dashboard');
    }

    public function manageRoles()
    {
        $roles = Role::all();
        return view('superuser.manage_roles', compact('roles'));
    }

    public function storeRole(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);

        Role::create(['name' => $request->name]);

        return redirect()->route('superuser.manageRoles')->with('success', 'Role created successfully.');
    }

    public function managePermissions()
    {
        $permissions = Permission::all();
        return view('superuser.manage_permissions', compact('permissions'));
    }

    public function storePermission(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name',
        ]);

        Permission::create(['name' => $request->name]);

        return redirect()->route('superuser.managePermissions')->with('success', 'Permission created successfully.');
    }

    public function manageUsers()
    {
        $users = User::all();
        $roles = Role::all();
        return view('superuser.manage_users', compact('users', 'roles'));
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if ($request->has('roles')) {
            $user->roles()->sync($request->roles);
        }

        return redirect()->route('superuser.manageUsers')->with('success', 'User created successfully.');
    }

    public function updateUserRoles(Request $request, User $user)
    {
        $request->validate([
            'roles' => 'array',
        ]);

        $user->roles()->sync($request->roles);

        return redirect()->route('superuser.manageUsers')->with('success', 'User roles updated successfully.');
    }
}
