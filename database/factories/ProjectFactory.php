<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'leader_id' => fake()->numberBetween(1,50),
            'owner' => fake()->name(),
            'deadline' => fake()->date(),
            'progress' => fake()->numberBetween(0,100),
            'description' => fake()->text()
        ];
    }
}
