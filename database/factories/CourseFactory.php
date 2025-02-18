<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use Carbon\Carbon;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = Carbon::today()->addDays($this->faker->numberBetween(5, 30)); // Future start date
        $admissionEndDate = $startDate->copy()->subDays($this->faker->numberBetween(1, 5)); // Before start date
        $courseDuration = $this->faker->numberBetween(1, 6); // Months
        $endDate = $startDate->copy()->addMonths($courseDuration); // End date after duration

        return [
            'name' => $this->faker->word(),
            'description' => '<p>' . $this->faker->sentence() . '</p>',
            'category_id' => 1, // Change if categories are dynamic
            'is_visible' => true,
            'is_open' => true,
            'teacher_id' => 5, // Adjust if needed
            'course_duration' => $courseDuration,
            'fee' => $this->faker->randomFloat(2, 1000, 10000),
            'capacity' => $this->faker->numberBetween(10, 50),
            'enrolled' => 0,
            'admission_end_date' => $admissionEndDate->toDateString(),
            'start_date' => $startDate->toDateString(),
            'end_date' => $endDate->toDateString(),
        ];
    }
}
