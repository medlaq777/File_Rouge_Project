<?php

namespace Database\Factories;

use App\Models\User;
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
        // Fetch IDs of users with the 'owner' role directly from the database
        $ownerIds = User::where('role', 'owner')->pluck('id')->toArray();

        // Ensure there are owners in the database
        if (empty($ownerIds)) {
            throw new \Exception('No users with the "owner" role found. Please create at least one owner.');
        }

        return [
            'user_id' => $this->faker->randomElement($ownerIds),
            'name' => $this->faker->company,
            'description' => $this->faker->text(200),
            'address' => $this->faker->address,
            'location' => $this->faker->city,
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'availability' => $this->faker->boolean,
            'equipment' => $this->faker->sentence,
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'feature' => $this->faker->word,
            'start_date' => now(),
            'end_date' => now()->addDays(3),
        ];
    }
}
