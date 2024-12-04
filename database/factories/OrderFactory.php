<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'voucher_no' =>$this->faker->ean8,
            'total' => $this->faker->numberBetween(10000, 200000),
            'qty' => $this->faker->numberBetween(1,10),
            'payment_slip' => $this->faker->imageUrl,
            'status' => $this->faker->word,
            'note' => $this->faker->word,
            'item_id' => rand(2,21),
            'payment_id' => rand(1,5),
            'user_id' => rand(1,2)
        ];
    }
}
