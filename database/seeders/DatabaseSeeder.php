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
        // Create 10 owner users and 10 regular users
        User::factory(10)->create(['role' => 'owner']);
        User::factory(10)->create();

        // Create profiles for all users
        User::all()->each(function ($user) {
            ProfileUser::factory()->create(['user_id' => $user->id]);
        });

        // Get all owner users
        $ownerUsers = User::where('role', 'owner')->get();

        // Create 20 studios and distribute them among owners
        $studios = Studios::factory(20)->make()->each(function ($studio, $index) use ($ownerUsers) {
            $studio->user_id = $ownerUsers[$index % $ownerUsers->count()]->id;
            $studio->save();
        });

        // Create 20 equipment items and distribute them among studios
        Equipement::factory(20)->create()->each(function ($equipement, $index) use ($studios) {
            $equipement->studio_id = $studios[$index % $studios->count()]->id;
            $equipement->save();
        });

        // Create 3 images for each studio
        $studios->each(function ($studio) {
            for ($i = 0; $i < 3; $i++) {
                $studio->images()->create([
                    'image_path' => 'https://placehold.co/400x400/EEE/31343C',
                    'image_name' => 'Image ' . ($i + 1),
                    'image_type' => 'image/jpeg',
                    'image_size' => rand(100, 5000),
                ]);
            }
        });
    }
}
