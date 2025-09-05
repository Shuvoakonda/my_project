<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->bothify('COUPON-####'),
            'discount' => $this->faker->randomFloat(2, 5, 50),
            'type' => $this->faker->randomElement(['fixed', 'percentage']),
            'expiry_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
