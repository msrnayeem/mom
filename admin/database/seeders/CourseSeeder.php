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
            'name' => [
                'en' => 'Course 1',
                'bn' => 'কোর্স ১',
            ],
            'description' => [
                'en' => [
                    'overview' => 'This is an overview of Course 1.',
                    'modules' => ['Module 1', 'Module 2', 'Module 3'],
                    'duration' => '3 weeks',
                ],
                'bn' => [
                    'overview' => 'কোর্স ১ এর একটি ওভারভিউ।',
                    'modules' => ['মডিউল ১', 'মডিউল ২', 'মডিউল ৩'],
                    'duration' => '৩ সপ্তাহ',
                ],
            ],
            'category_id' => $category->id,
        ]);

        Course::create([
            'name' => [
                'en' => 'Course 2',
                'bn' => 'কোর্স ২',
            ],
            'description' => [
                'en' => [
                    'overview' => 'This is an overview of Course 2.',
                    'modules' => ['Module A', 'Module B', 'Module C'],
                    'duration' => '4 weeks',
                ],
                'bn' => [
                    'overview' => 'কোর্স ২ এর একটি ওভারভিউ।',
                    'modules' => ['মডিউল এ', 'মডিউল বি', 'মডিউল সি'],
                    'duration' => '৪ সপ্তাহ',
                ],
            ],
            'category_id' => $category->id,
        ]);

        Course::create([
            'name' => [
                'en' => 'Course 3',
                'bn' => 'কোর্স ৩',
            ],
            'description' => [
                'en' => [
                    'overview' => 'This is an overview of Course 3.',
                    'modules' => ['Module X', 'Module Y', 'Module Z'],
                    'duration' => '2 weeks',
                ],
                'bn' => [
                    'overview' => 'কোর্স ৩ এর একটি ওভারভিউ।',
                    'modules' => ['মডিউল এক্স', 'মডিউল ওয়াই', 'মডিউল জেড'],
                    'duration' => '২ সপ্তাহ',
                ],
            ],
            'category_id' => $category->id,
        ]);
    }
}
