<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => fake()->dateTime(),
            'remember_token' => Str::random(10),
            'username' => fake()->unique()->userName(),
            'phone' => fake()->unique()->phoneNumber(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'country' => fake()->country(),
            'password' => Hash::make(static::$password ??= Str::random(10)),
            'role' => fake()->randomElement(['admin', 'owner', 'Artist']),
            'bio' => fake()->text(200),
            'profile_image' => fake()->imageUrl(640, 480, 'people'),
            'contact_info' => fake()->text(100),
        ];
    }


    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
