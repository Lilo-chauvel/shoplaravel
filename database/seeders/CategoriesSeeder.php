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
        DB::table('categories')->insert([
            [
                'name' => 'Vélo de route',
                'slug' => 'velo-de-route',
                'description' => 'Vélos conçus pour la vitesse et la performance sur route.',
                'created_at'=>now()->subDays(10),
                'updated_at'=>now()->subDays(10),
            ],
            [
                'name' => 'Vélo gravel',
                'slug' => 'velo-gravel',
                'description' => 'Vélos polyvalents pour routes et chemins.',
                'created_at'=>now()->addDays(10),
                'updated_at' => now()->addMonths(2)
            ],
            [
                'name' => 'Vélo de montagne',
                'slug' => 'velo-de-montagne',
                'description' => 'VTT pour terrains accidentés et sentiers.',
                'updated_at'=>now()->subDays(10),
                'created_at' => now(),
            ],
            [
                'name' => 'Vélo urbain',
                'slug' => 'velo-urbain',
                'description' => 'Vélos adaptés à la ville et aux déplacements quotidiens.',
                'updated_at'=>now()->subDays(10),
                'created_at' => now()->subDays(25),
            ],
            [
                'name' => 'Vélo électrique',
                'slug' => 'velo-electrique',
                'description' => 'Vélos à assistance électrique pour tous les usages.',
                'updated_at'=>now()->subDays(10),
                'created_at' => now()->subMonths(2),
            ],
        ]);
    }
}
