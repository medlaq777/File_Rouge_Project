<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profileUser>
 */
class ProfileUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->numberBetween(1, 1000),
            'user_id' => \App\Models\User::factory(),
            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'bio' => $this->faker->text(200),
            'profile_image' => $this->faker->imageUrl(640, 480, 'people'),
            'contact_info' => $this->faker->text(100),
            'timestamps' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
