<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'user_id' => null, // Set dynamically in UserFactory
            'phone' => $this->faker->phoneNumber(),
            'whatsap' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
        ];
    }
}
