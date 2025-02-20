<?php

namespace Database\Seeders;

use App\Enums\GenderType;
use App\Enums\UserType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'first_name' => 'Test',
            'middle_name' => 'Test',
            'last_name' => 'User',
            'gender' => GenderType::Male,
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'mobile_number' => random_int(1, 10),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole(UserType::Admin);
    }
}
