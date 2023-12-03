<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Page;
use App\Models\Product;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create();
        Page::factory()->count(5)->create();
        Author::factory()->count(5)->create();
        Product::factory()->count(5)->create();
    }
}
