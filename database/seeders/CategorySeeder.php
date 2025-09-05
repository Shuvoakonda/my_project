<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
    // Create 10 random categories
    \App\Models\Category::factory(10)->create();
    }
}
