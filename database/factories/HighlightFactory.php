<?php

namespace Database\Factories;

use App\Models\Highlight;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HighlightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Highlight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create([
                'role' => 1
            ]),
            'media' => $this->faker->imageUrl,
            'title' => $this->faker->title,
            'caption' => $this->faker->realTextBetween(100, 400)
        ];
    }
}
