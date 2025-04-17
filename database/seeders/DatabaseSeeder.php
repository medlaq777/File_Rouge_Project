<?php

namespace Database\Seeders;

use App\Models\Equipement;
use App\Models\User;
use App\Models\ProfileUser;
use App\Models\Studios;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create users and their profiles
        User::factory(20)->create()->each(function ($user) {
            ProfileUser::factory()->create(['user_id' => $user->id]);
        });

        // Fetch all owner users
        $ownerUsers = User::where('role', 'owner')->get();

        // Ensure there are owners in the database
        if ($ownerUsers->isEmpty()) {
            throw new \Exception('No users with the "owner" role found. Please create at least one owner.');
        }

        // Create studios and assign them to random owners
        Studios::factory(20)->create()->each(function ($studio) use ($ownerUsers) {
            $studio->user_id = $ownerUsers->random()->id;
            $studio->save();
        });

        Equipement::factory(20)->create()->each(function ($equipement) use ($ownerUsers) {
            $equipement->studio_id = Studios::all()->random()->id;
            $equipement->save();
        });
    }
}
