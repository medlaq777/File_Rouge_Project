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
            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'phone' => '+212' . $this->faker->unique()->numberBetween(600000000, 699999999),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'country' => 'Morocco',
            'bio' => $this->faker->text(200),
            'profile_image' => $this->faker->imageUrl(640, 480, 'people'),
            'contact_info' => $this->faker->text(100),
        ];
    }
}
