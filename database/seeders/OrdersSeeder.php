<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->truncate();

        [
            ['status'=>'pending','user_id'=>'4'],
            ['status'=>'paid','user_id'=>'2'],
            ['status'=>'delivered','user_id'=>'1'],
        ];

        for ($i = 1; $i <= 6; $i++) {
            DB::table('orders')->insert([
                'user_id' => rand(1, 6),
                'status' => ['pending', 'paid', 'shipped', 'delivered', 'cancelled'][rand(0, 4)],
                'created_at' => now()->subDays(rand(1, 30)),
                'updated_at' => now(),
            ]);
        }
    }
}
