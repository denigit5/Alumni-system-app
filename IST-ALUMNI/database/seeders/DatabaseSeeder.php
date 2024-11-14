<?php

namespace Database\Seeders;

use App\Models\Alumni; // Import your Alumni model
use App\Models\Alumnus;
use App\Models\Employer;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 'alumni' and 'employer' roles if they don't exist
        Role::firstOrCreate(['name' => 'alumni', 'guard_name' => 'web']);
        Role::firstOrCreate(['name' => 'employer', 'guard_name' => 'web']);

        // Create a test user for alumni and assign the 'alumni' role
        $alumniUser = Alumnus::factory()->create([ // Use Alumni model here
            'name' => 'Alumni User',
            'email' => 'alumni@example.com',
            'password' => bcrypt('password') // Set a default password
        ]);
        $alumniUser->assignRole('alumni');

        // Create a test user for employer and assign the 'employer' role
        $employerUser = Employer::factory()->create([ // Use Alumni model or another model
            'name' => 'Employer User',
            'email' => 'employer@example.com',
            'password' => bcrypt('password') // Set a default password
        ]);
        $employerUser->assignRole('employer');
    }
}
