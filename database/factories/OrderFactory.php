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
            'store_id' => fake()->numberBetween(1, 10),
            'user_id' => fake()->numberBetween(1, 100),
            'payment_type' => fake()->randomElement(['credit_card', 'paypal', 'cash']),
            'cash' => fake()->boolean,
            'Billdenomination' => fake()->randomElement(['$20', '$50', '$100']),
            'amount' => fake()->randomFloat(2, 10, 1000),
            'suggest_donation' => fake()->boolean,
            'donation' => fake()->boolean,
            'organization_id' => fake()->numberBetween(1, 5),
            'donation_id' => fake()->numberBetween(1, 10),
        ];
    }
}
