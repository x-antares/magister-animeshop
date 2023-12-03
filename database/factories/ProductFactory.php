<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sentence = $this->faker->sentence;
        $author = Author::inRandomOrder()->first();

        return [
            'name' => $sentence,
            'slug' => Str::slug($sentence),
            'body' => $this->faker->text,
            'author_id' => $author->id,
        ];
    }
}
