<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Order_itemsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('order_items')->truncate();
        $orderIds = DB::table('orders')->pluck('id')->all();
        $productIds = DB::table('products')->pluck('id')->all();

        foreach ($orderIds as $orderId) {
            $itemsCount = rand(2, 5);
            for ($i = 0; $i < $itemsCount; $i++) {
                DB::table('order_items')->insert([
                    'order_id' => $orderId,
                    'product_id' => $productIds[array_rand($productIds)],
                    'quantity' => rand(1, 3),
                    'created_at' => now()->subDays(rand(1, 30)),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
