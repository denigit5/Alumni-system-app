<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the roles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new role.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created role in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles|max:255',
            'permissions' => 'array'
        ]);

        $role = Role::create(['name' => $request->name]);
        if ($request->has('permissions')) {
            $role->permissions()->sync($request->permissions);
        }

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    /**
     * Display the specified role.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified role.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified role in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|max:255|unique:roles,name,' . $role->id,
            'permissions' => 'array'
        ]);

        $role->update(['name' => $request->name]);
        if ($request->has('permissions')) {
            $role->permissions()->sync($request->permissions);
        }

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    /**
     * Remove the specified role from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }

    /**
     * Show the form for assigning permissions to the role.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function addPermissionToRole(Role $role)
    {
        $permissions = Permission::all();
        return view('roles.give-permissions', compact('role', 'permissions'));
    }

    /**
     * Assign the specified permissions to the role.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function givePermissionToRole(Request $request, Role $role)
    {
        $request->validate([
            'permissions' => 'array'
        ]);

        if ($request->has('permissions')) {
            $role->permissions()->sync($request->permissions);
        }

        return redirect()->route('roles.index')->with('success', 'Permissions assigned successfully.');
    }
}
