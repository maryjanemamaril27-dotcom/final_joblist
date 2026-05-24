<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class ListJobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
          [
                'id' => 1,
                'title' => 'Cybersecurity Specialist',
                'salary' => '$2600',
                'job_description' => 'Protects systems and data from cyber threats.'
            ],
            [
                'id' => 2,
                'title' => 'DevOps Engineer',
                'salary' => '$3100',
                'job_description' => 'Improves collaboration between development and operations teams.'
            ],
            [
                'id' => 3,
                'title' => 'IT Project Manager',
                'salary' => '$3700',
                'job_description' => 'Responsible for planning, organizing, and managing IT projects from start to finish. Ensures that project goals are met within scope, time, and budget.'
            ],
            [
                'id' => 4,
                'title' => 'Game Developer',
                'salary' => '$3800',
                'job_description' => 'Develops and builds video games and interactive experiences.'
            ],
            [
                'id' => 5,
                'title' => 'UI/UX Designer',
                'salary' => '$2000',
                'job_description' => 'Designs user-friendly interfaces and experiences.'
            ]
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }
}


