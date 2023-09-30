<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'deadline' => fake()->date(),
            'description' => fake()->optional()->text(250),
            'user_id' => User::factory()->create(),
            'project_id' => fake()->randomElement(Project::pluck('id')->toArray()),
            'status_id' => fake()->randomElement([1,2,3]),
        ];
    }
}
