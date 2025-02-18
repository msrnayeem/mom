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
        for($i = 4; $i <= 7; $i++) {
            User::create([
                'name' => 'teacher ' . $i,
                'email' => 'teacher' . $i . '@example.com',
                'password' => Hash::make('password'),
                'role' => 'teacher',
            ]);
        }

        $this->call(UserSeeder::class);
        
        $this->call(CategorySeeder::class);
        $this->call(CourseSeeder::class);
    }
}
