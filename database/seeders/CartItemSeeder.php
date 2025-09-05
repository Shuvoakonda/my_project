<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CartItem;
use App\Models\Cart;
use App\Models\Product;

class CartItemSeeder extends Seeder
{
    public function run(): void
    {
        $cart = Cart::first();
        $product = Product::first();
        if ($cart && $product) {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => 99.99,
            ]);
        }
    }
}
