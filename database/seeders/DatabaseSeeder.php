<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Page;
use App\Models\Picture;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create();
        Page::factory()->count(5)->create();
        Category::factory()->count(5)->create();
        Brand::factory()->count(5)->create();
        Product::factory()->count(15)->create();
    }
}
