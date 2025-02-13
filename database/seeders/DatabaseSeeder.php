<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Create a Admin
        for($i = 1; $i <= 4; $i++) {
            User::create([
                'name' => 'admin ' . $i,
                'email' => 'admin' . $i . '@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]);
        }

        // Create a teacher
        for($i = 1; $i <= 3; $i++) {
            User::create([
                'name' => 'teacher ' . $i,
                'email' => 'teacher' . $i . '@example.com',
                'password' => Hash::make('password'),
                'role' => 'teacher',
            ]);
        }

        // Create a Student user
        for($i = 1; $i <= 20; $i++) {
            User::create([
                'name' => 'Student ' . $i,
                'email' => 'student' . $i . '@example.com',
                'password' => Hash::make('password'),  // Hash password
                'role' => 'student',
            ]);
        }
    }
}
