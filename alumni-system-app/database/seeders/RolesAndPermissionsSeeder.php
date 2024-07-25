<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $superUserRole = Role::create(['name' => 'superuser']);
        $adminRole = Role::create(['name' => 'admin']);
        $alumniRole = Role::create(['name' => 'alumni']);
        $employerRole = Role::create(['name' => 'employer']);

        // General Permissions
        $viewDashboard = Permission::create(['name' => 'view-dashboard']);
        $viewAnalytics = Permission::create(['name' => 'view-analytics']);

        // Superuser Permissions
        $permissions = [
            'view-role', 'create-role', 'update-role', 'delete-role',
            'view-permission', 'create-permission', 'update-permission', 'delete-permission',
            'view-user', 'create-user', 'update-user', 'delete-user',
            'view-dashboard', 'view-analytics'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $superUserRole->givePermissionTo($permissions);

        // Admin Permissions
        $adminPermissions = [
            'view-role', 'create-role', 'update-role',
            'view-permission', 'create-permission',
            'view-user', 'create-user', 'update-user',
            'view-job', 'create-job', 'update-job',
            'view-dashboard'
        ];

        $adminRole->givePermissionTo($adminPermissions);

        // Alumni Permissions
        $alumniPermissions = [
            'create-portfolio', 'publish-projects', 'edit-projects', 'delete-projects',
            'view-job-postings', 'apply-for-jobs',
            'view-own-profile', 'edit-profile',
            'view-own-applications',
            'view-dashboard'
        ];

        $alumniRole->givePermissionTo($alumniPermissions);

        // Employer Permissions
        $employerPermissions = [
            'create-job-posting', 'view-alumni-profile', 'view-alumni-projects', 'view-analytics',
            'view-dashboard'
        ];

        $employerRole->givePermissionTo($employerPermissions);
    }
}
