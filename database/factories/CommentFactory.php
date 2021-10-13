<?php

namespace Database\Factories;

use App\Models\Highlight;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'highlight_id' => Highlight::factory(),
            'user_id' => User::factory()->create([
                'role' => 1
            ]),
            'body' => $this->faker->realTextBetween(100, 255)
        ];
    }
}
