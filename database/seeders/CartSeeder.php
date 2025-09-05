<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;
use App\Models\User;

class CartSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();
        Cart::create([
            'user_id' => $user->id,
            'total_amount' => 0,
        ]);
    }
}
