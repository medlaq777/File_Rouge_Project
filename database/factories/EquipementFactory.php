<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Studios;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipement>
 */
class EquipementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'studio_id' => Studios::factory(),
            'name' => $this->faker->randomElement(['FL Studio', 'Ableton Live', 'Logic Pro X', 'Pro Tools', 'Cubase', 'Studio One', 'GarageBand']),
            // 'description' => $this->faker->text(200),
            // Add any other fields you want to include in the factory
        ];
    }
}
