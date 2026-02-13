<?php

namespace Database\Seeders;

use App\Http\Controllers\CartItems;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call([
            CategoriesSeeder::class,
            ProductsSeeder::class,
            UserSeeder::class,
            OrdersSeeder::class,
            Order_itemsSeeder::class,
        ]);
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
