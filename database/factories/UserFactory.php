<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;
    private static int $sequence = 1;

    public function definition(): array
    {
        $number = self::$sequence++;

        return [
            'name' => 'student' . $number,
            'email' => 'student' . $number . '@example.com',
            'password' => Hash::make('password'),
            'role' => 'student',
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            // Create associated student details after creating the user
            Student::factory()->create(['user_id' => $user->id]);
        });
    }
}
