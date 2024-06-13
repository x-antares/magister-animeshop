<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->randomElement([
            "Дім та Офіс ",
            "Блокноти і Скетчбуки ",
            "Гобелени ",
            "Гральні карти ",
            "Дакімакури ",
            "Дзеркальця ",
            "Календари и открытки ",
            "Килимки для миші ",
            "Кружки ",
            "Нічники ",
            "Парасолі ",
        ]);

        return [
            'name' => $name,
            'slug' => \Str::slug($name),
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Category $category) {
            //
        })->afterCreating(function (Category $category) {
            try {
                // Media
                $category->addMediaFromUrl('https://picsum.photos/920/460')->toMediaCollection('image');
            } catch (\Exception $exception) {
                \Log::error($exception);
            }
        });
    }
}
