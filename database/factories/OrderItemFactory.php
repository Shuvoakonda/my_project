<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Product;

class OrderItemFactory extends Factory
{
    public function definition(): array
    {
        $orderId = Order::inRandomOrder()->first()?->id ?? 1;
        $productId = Product::inRandomOrder()->first()?->id ?? 1;
        return [
            'order_id' => $orderId,
            'product_id' => $productId,
            'quantity' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->randomFloat(2, 10, 500),
        ];
    }
}
