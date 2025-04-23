<?php

namespace Database\Seeders;

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
        // Create 3 owner users and 17 regular users
        $owners = User::factory(3)->create(['role' => 'owner']);
        User::factory(17)->create();

        // Create profiles for all users
        User::all()->each(function ($user) {
            ProfileUser::factory()->create(['user_id' => $user->id]);
        });

        // For each owner, create 2 studios and 1 image per studio
        $owners->each(function ($owner) {
            $studios = Studios::factory(2)->create(['user_id' => $owner->id]);
            $studios->each(function ($studio) {
                $studio->images()->create([
                    'image_path' => 'https://placehold.co/400x400/EEE/31343C',
                ]);
            });
        });
    }
}
