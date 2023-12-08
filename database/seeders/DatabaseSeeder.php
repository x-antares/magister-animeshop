<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Page;
use App\Models\Picture;
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
        Author::factory()->count(5)->create();
        Picture::factory()->count(5)->create();
    }
}
