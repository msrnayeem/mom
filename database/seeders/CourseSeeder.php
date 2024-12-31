<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::first(); 

        Course::create([
            'name' => 'Course 1',
            'description' => json_encode([
                'overview' => 'This is an overview of Course 1.',
                'modules' => ['Module 1', 'Module 2', 'Module 3'],
                'duration' => '3 weeks'
            ]), 
            'category_id' => $category->id,
        ]);

        Course::create([
            'name' => 'Course 2',
            'description' => json_encode([
                'overview' => 'This is an overview of Course 2.',
                'modules' => ['Module A', 'Module B', 'Module C'],
                'duration' => '4 weeks'
            ]),
            'category_id' => $category->id,
        ]);

        Course::create([
            'name' => 'Course 3',
            'description' => json_encode([
                'overview' => 'This is an overview of Course 3.',
                'modules' => ['Module X', 'Module Y', 'Module Z'],
                'duration' => '2 weeks'
            ]),
            'category_id' => $category->id,
        ]);
    }
}
