<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::firstOrCreate(
            ['name->bn' => 'আকিদাহ'],
            ['name' => ['en' => 'Aqidah', 'bn' => 'আকিদাহ']]
        );

        Category::firstOrCreate(
            ['name->bn' => 'ফিকহ'],
            ['name' => ['en' => 'Fiqh', 'bn' => 'ফিকহ']]
        );

        Category::firstOrCreate(
            ['name->bn' => 'দাওয়াহ'],
            ['name' => ['en' => 'Dawah', 'bn' => 'দাওয়াহ']]
        );

        Category::firstOrCreate(
            ['name->bn' => 'উর্দু'],
            ['name' => ['en' => 'Urdu', 'bn' => 'উর্দু']]
        );

        Category::firstOrCreate(
            ['name->bn' => 'তাফসীর'],
            ['name' => ['en' => 'Tafsir', 'bn' => 'তাফসীর']]
        );

    }
}
