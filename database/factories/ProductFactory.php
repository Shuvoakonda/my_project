<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $vendorId = User::inRandomOrder()->first()?->id ?? 1;
        $categoryId = Category::inRandomOrder()->first()?->id ?? 1;
        return [
            'vendor_id' => $vendorId,
            'category_id' => $categoryId,
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->sentence(10),
            // Use a reliable placeholder image
            'image' => 'https://picsum.photos/seed/product' . $this->faker->unique()->numberBetween(1, 1000) . '/400/400',
            'price' => $this->faker->randomFloat(2, 10, 500),
            'stock' => $this->faker->numberBetween(0, 100),
            'type' => $this->faker->randomElement(['physical', 'digital']),
        ];
    }
}
