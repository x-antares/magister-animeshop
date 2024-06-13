<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $priceArray = [
            '540',
            '399',
            '120',
            '310',
            '40',
            '234',
        ];

        $nameArray = [
            'Скетчбук Наруто',
            'Пенал Наруто',
            'Манга Наруто',
            'Кунай Наруто',
            'Кільце Наруто',
            'Чашка Наруто',
            'Скетчбук Наруто1',
            'Пенал Наруто1',
            'Манга Наруто1',
            'Кунай Наруто1',
            'Кільце Наруто1',
            'Чашка Наруто1',
            'Скетчбук Наруто2',
            'Пенал Наруто2',
            'Манга Наруто2',
            'Кунай Наруто2',
            'Кільце Наруто2',
            'Чашка Наруто2',
            'Скетчбук Наруто3',
            'Пенал Наруто3',
            'Манга Наруто3',
            'Кунай Наруто3',
            'Кільце Наруто3',
            'Чашка Наруто3',
        ];

        $code = $this->faker->unique()->numberBetween('111111111', '999999999');
        $qty = $this->faker->numberBetween('1', '35');
        $inStock = random_int(0,1);
        $additionalInformation = $this->faker->text;
        $shortDescription = $this->faker->text;
        $body = $this->faker->text;
        $category = Category::inRandomOrder()->first()->id;
        $brand = Brand::inRandomOrder()->first()->id;
        $price = $this->faker->randomElement($priceArray);
        $name = $this->faker->unique()->randomElement($nameArray);

        return [
            'slug' => \Str::slug($name),
            'code' => $code,
            'price' => $price,
            'qty' => $qty,
            'in_stock' => $inStock,
            'name' => $name,
            'body' => $body,
            'short_description' => $shortDescription,
            'additional_information' => $additionalInformation,
            'category_id' => $category,
            'brand_id' => $brand,
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Product $product) {
            //
        })->afterCreating(function (Product $product) {
            try {
                // Media
                $product->addMediaFromUrl('https://picsum.photos/920/460')->toMediaCollection('image');
            } catch (\Exception $exception) {
                \Log::error($exception);
            }
        });
    }

}
