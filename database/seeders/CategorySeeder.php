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
        Category::firstOrCreate(['name' => 'আকিদাহ']);
        Category::firstOrCreate(['name' => 'ফিকহ']);
        Category::firstOrCreate(['name' => 'দাওয়াহ']);
        Category::firstOrCreate(['name' => 'উর্দু']);
        Category::firstOrCreate(['name' => 'তাফসীর']);
    }
}
