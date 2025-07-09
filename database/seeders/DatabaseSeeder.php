<?php

namespace Database\Seeders;

use App\Models\Deadline;
use App\Models\Feedback;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
        ]);

        $project = Project::factory()->create([
            'user_id' => $user->id,
            'title' => 'Capstone Project: Sustainable Energy Solutions',
            'team_members' => 'Olivia, Ethan, Chloe',
            'completion' => 60,
        ]);

        Deadline::factory()->create([
            'project_id' => $project->id,
            'title' => 'Project Proposal Submission',
            'due_date' => now()->addDays(10),
        ]);

        Deadline::factory()->create([
            'project_id' => $project->id,
            'title' => 'Midterm Presentation',
            'due_date' => now()->addDays(30),
        ]);

        Feedback::factory()->create([
            'project_id' => $project->id,
            'reviewer_name' => 'Dr. Thompson',
            'comments' => 'Great progress on the initial research. Focus on refining the methodology section.',
        ]);
    }
}