<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);

        $profile = Profile::factory()->create([
            'user_id' => $user->id,
        ]);

        $experience = Experience::factory(5)->create([
            'profile_id' => $user->id,
        ]);
    }
}
