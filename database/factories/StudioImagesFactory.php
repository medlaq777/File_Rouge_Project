<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\StudioImages;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudioImages>
 */
class StudioImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'studio_id' => StudioImages::factory(),
            'image_path' => 'https://placehold.co/200x200/EEE/31343C',
            'image_name' => $this->faker->word(),
            'image_type' => $this->faker->word(),
            'image_size' => $this->faker->numberBetween(100, 5000),
        ];
    }
}
