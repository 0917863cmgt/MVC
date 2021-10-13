<?php

namespace Database\Factories;

use App\Models\Statistic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatisticFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Statistic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'rank' => $this->faker->randomDigitNotZero(),
            'rank_points' => $this->faker->numberBetween(1,900),
            'matches_played' => $this->faker->numberBetween(70,99),
            'matches_won' => $this->faker->numberBetween(30,50),
            'matches_draw' => $this->faker->numberBetween(0,15),
            'matches_lost' => $this->faker->numberBetween(30,50),
        ];
    }
}
