<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'client_id' => fake()->randomElement(Client::pluck('id')->toArray()),
            'status_id' => fake()->randomElement([1,2,3]),
        ];
    }
}
