<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            [
                'title' => 'Software Engineer',
                'description' => 'Develop and maintain software applications.',
                'requirements' => 'Bachelor\'s degree in Computer Science or related field.'
            ],
            [
                'title' => 'Web Developer',
                'description' => 'Create and manage websites.',
                'requirements' => 'Experience with HTML, CSS, and JavaScript.'
            ],
            [
                'title' => 'Mobile App Developer',
                'description' => 'Develop applications for mobile devices.',
                'requirements' => 'Knowledge of iOS/Android development.'
            ],
            [
                'title' => 'System Analyst',
                'description' => 'Analyze and design information systems.',
                'requirements' => 'Strong analytical and problem-solving skills.'
            ],
            [
                'title' => 'Database Administrator',
                'description' => 'Manage and maintain databases.',
                'requirements' => 'Experience with SQL and database management.'
            ],
            [
                'title' => 'DevOps Engineer',
                'description' => 'Implement and manage DevOps processes.',
                'requirements' => 'Knowledge of CI/CD pipelines and automation tools.'
            ],
            [
                'title' => 'Front-End Developer',
                'description' => 'Develop user interfaces for web applications.',
                'requirements' => 'Proficiency in HTML, CSS, and JavaScript frameworks.'
            ],
            [
                'title' => 'Back-End Developer',
                'description' => 'Develop server-side logic and integration.',
                'requirements' => 'Experience with server-side programming languages.'
            ],
            [
                'title' => 'Full-Stack Developer',
                'description' => 'Work on both front-end and back-end of web applications.',
                'requirements' => 'Strong understanding of both client and server-side technologies.'
            ],
            [
                'title' => 'QA Engineer',
                'description' => 'Ensure software quality through testing and validation.',
                'requirements' => 'Experience with software testing methodologies and tools.'
            ]
        ];

        foreach ($jobs as $jobData) {
            Job::updateOrCreate(
                ['title' => $jobData['title']], // Check for existing job by title
                [
                    'description' => $jobData['description'],
                    'requirements' => $jobData['requirements']
                ]
            );
        }
    }
}
