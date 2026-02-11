<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartsItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts_items')->truncate();
        $cartIds = DB::table('carts')->pluck('id')->all();
        $products = DB::table('products')->get();

        foreach ($cartIds as $cartId) {
            $itemsCount = rand(2, 5);
            for ($i = 0; $i < $itemsCount; $i++) {
                $product = $products->random();
                DB::table('carts_items')->insert([
                    'cart_id' => $cartId,
                    'product_id' => $product->id,
                    'quantity' => rand(1, 3),
                    'price' => $product->price,
                    'created_at' => now()->subDays(rand(1, 30)),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
