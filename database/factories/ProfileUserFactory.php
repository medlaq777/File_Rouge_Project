<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfileUser>
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
            'user_id' => User::factory(),
            'full_name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'phone' => '+212' . $this->faker->unique()->numberBetween(600000000, 699999999),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'country' => 'Morocco',
            'bio' => $this->faker->text(200),
            'profile_image' => 'https://placehold.co/200x200/EEE/31343C',
        ];
    }
}
