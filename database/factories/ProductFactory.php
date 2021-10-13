<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory()->create(['isProduct' => true]),
            'title' => $this->faker->unique->word,
            'line' => $this->faker->word,
            'vendor' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'msrp' => $this->faker->randomFloat(2,10, 9999),
            'price' => $this->faker->randomFloat(2,10, 9999),
            'stock' => $this->faker->numberBetween()
        ];
    }
}
