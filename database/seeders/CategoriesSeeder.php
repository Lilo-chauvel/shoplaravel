<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Les produits doivent être truncatés avant !
        DB::table('categories')->truncate();
        DB::table('categories')->insert(
            [
                [
                    'name' => 'Clothing',
                    'slug' => 'clothing',
                    'description' => 'A collection of Eloquent hoodies and Artisan T-shirts to proudly wear the colors of your favorite framework.',
                    'created_at'=>now()->subDays(10),
                    'updated_at'=>now()->subDays(10),
                ],
                [
                    'name' => 'Accessories',
                    'slug' => 'accessories',
                    'description' => 'Coffee mugs and essential Blade stickers to personalize your developer workspace.',
                    'created_at'=>now()->addDays(10),
                    'updated_at' => now()->addMonths(2)
                ],
                [
                    'name' => 'Electronics',
                    'slug' => 'electronics',
                    'description' => 'A selection of tech gear and gadgets to boost your productivity (Information not present in the sources).',
                    'updated_at'=>now()->subDays(10),
                    'created_at' => now(),
                ],
                [
                    'name' => 'Books',
                    'slug' => 'books',
                    'description' => null,
                    'updated_at'=>now()->subDays(10),
                    'created_at' => now()->subDays(25),
                ],
                [
                    'name' => 'Services',
                    'slug' => 'services',
                    'description' => 'Support and expertise for deploying your applications on platforms such as Laravel Cloud or Forge.',
                    'updated_at'=>now()->subDays(10),
                    'created_at' => now()->subMonths(2),
                ],
            ]

        );
    }
}
