<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class SubscriptionFactory extends Factory
{
    public function definition(): array
    {
        $userId = User::inRandomOrder()->first()?->id ?? 1;
        return [
            'user_id' => $userId,
            'name' => $this->faker->word() . ' Plan',
            'type' => $this->faker->randomElement(['digital', 'physical']),
            'recurring_period' => $this->faker->randomElement(['monthly', 'annual', 'bi-annual']),
            'price' => $this->faker->randomFloat(2, 5, 100),
        ];
    }
}
