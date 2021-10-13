<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => $this->faker->slug(),
            'title' => $this->faker->title(),
            'image' => $this->faker->imageUrl,
            'banner' => $this->faker->imageUrl,
            'summary' => $this->faker->realTextBetween(300, 800),
            'body' => $this->faker->paragraph,
            'highlighted' => $this->faker->randomElement([0,1]),
            'published' => $this->faker->randomElement([0,1]),
            'publish_date' => $this->faker->date
        ];
    }
}
