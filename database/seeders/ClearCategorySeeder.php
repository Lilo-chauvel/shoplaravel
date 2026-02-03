<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ClearCategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->truncate();
    }
}