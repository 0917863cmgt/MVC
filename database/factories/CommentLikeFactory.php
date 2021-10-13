<?php

namespace Database\Factories;

use App\Models\Highlight;
use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentLikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommentLike::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'highlight_id' => Highlight::factory(),
            'comment_id' => Comment::factory(),
            'user_id' => User::factory()
        ];
    }
}
