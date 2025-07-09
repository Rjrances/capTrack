<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(3),
            'team_members' => $this->faker->name() . ', ' . $this->faker->name(),
            'completion' => $this->faker->numberBetween(0, 100),
        ];
    }
}
