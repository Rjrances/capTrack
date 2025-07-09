<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeadlineFactory extends Factory
{
    public function definition()
    {
        return [
            'project_id' => Project::factory(),
            'title' => $this->faker->sentence(4),
            'due_date' => $this->faker->dateTimeBetween('+1 week', '+2 months'),
        ];
    }
}
