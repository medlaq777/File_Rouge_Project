<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Studios;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Availability>
 */
class AvailabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'studio_id' => Studios::factory(),
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'status' => $this->faker->randomElement(['available', 'booked']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
