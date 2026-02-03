<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->truncate();

        $products = [];
        for ($i = 1; $i <= 20; $i++) {
            $products[] = [
                'name' => "Product $i",
                'slug' => "product-$i",
                'description' => "Description for Product $i. Innovative, modern and useful for developers.",
                'image' => "product-$i.jpg",
                'price' => rand(10, 200),
                'stock' => rand(0, 50),
                'category_id' => rand(1, 5),
                'created_at' => now()->subDays(rand(1, 30)),
                'updated_at' => now()->subDays(rand(0, 10)),
            ];
        }
        DB::table('products')->insert($products);
    }
}
