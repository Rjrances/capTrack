<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    public function definition()
    {
        return [
            'project_id' => Project::factory(),
            'reviewer_name' => $this->faker->name(),
            'comments' => $this->faker->paragraph(),
        ];
    }
}
