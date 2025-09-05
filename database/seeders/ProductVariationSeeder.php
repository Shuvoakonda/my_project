<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductVariation;
use App\Models\Product;

class ProductVariationSeeder extends Seeder
{
    public function run(): void
    {
        $product = Product::first();
        if ($product) {
            ProductVariation::create([
                'product_id' => $product->id,
                'name' => 'Color',
                'value' => 'Red',
                'price' => 10.00,
                'stock' => 5,
            ]);
        }
    }
}
