<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;

class PaymentFactory extends Factory
{
    public function definition(): array
    {
        $orderId = Order::inRandomOrder()->first()?->id ?? 1;
        return [
            'order_id' => $orderId,
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
            'amount' => $this->faker->randomFloat(2, 50, 1000),
            'method' => $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer']),
        ];
    }
}
