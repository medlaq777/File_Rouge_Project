<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Studios>
 */
class StudiosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->text(200),
            'address' => $this->faker->address,
            'location' => $this->faker->city,
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'availability' => $this->faker->boolean,
            'equipment' => $this->faker->sentence,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
        ];
    }
}
