<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_number' => $this->faker->numberBetween(1),
            'user_id' => User::factory(),
            'order_date' => $this->faker->date,
            'required_date' => $this->faker->date,
            'shipped_date' => $this->faker->date,
            'status' => $this->faker->randomElement(['Payed', 'Not-Payed', 'Shipped', 'Delivered', 'Missing', 'Canceled', 'Return', 'Returned']),
            'comments' => $this->faker->realTextBetween(200,500)
        ];
    }
}
