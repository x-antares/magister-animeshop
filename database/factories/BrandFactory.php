<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->unique()->randomElement([
            'Atomic Flare',
            'Kotobukiya Co., Ltd',
            'Bandai Namco',
            'Good Smile Company USA',
            'Crunchyroll (Sony Music Entertainment)',
            'Sentai Filmworks, LLC (AMC Networks)',
            'Viz Media LLC',
            'Kodansha LTD'
        ]);

        return [
            'name' => $name,
            'slug' => \Str::slug($name),
        ];
    }
}
