<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carts')->truncate();

        [
            ['status' => 'pending', 'user_id' => '4'],
            ['status' => 'paid', 'user_id' => '2'],
            ['status' => 'delivered', 'user_id' => '1'],
        ];

        for ($i = 1; $i <= 6; $i++) {
            DB::table('carts')->insert([
                'user_id' => rand(1, 6),
                'status' => ['pending', 'paid', 'shipped', 'delivered', 'cancelled'][rand(0, 4)],
                'created_at' => now()->subDays(rand(1, 30)),
                'updated_at' => now(),
            ]);
        }
    }
}
