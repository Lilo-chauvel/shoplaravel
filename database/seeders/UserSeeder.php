<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();
        $presidents = [
            [
                'last_name' => 'Obama',
                'first_name' => 'Barack',
                'email' => 'obama@whitehouse.gov',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'remember_token' => null,
                'created_at' => now()->subDays(rand(1, 100)),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Trump',
                'first_name' => 'Donald',
                'email' => 'trump@whitehouse.gov',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'remember_token' => null,
                'created_at' => now()->subDays(rand(1, 100)),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Macron',
                'first_name' => 'Emmanuel',
                'email' => 'macron@elysee.fr',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'remember_token' => null,
                'created_at' => now()->subDays(rand(1, 100)),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Biden',
                'first_name' => 'Joe',
                'email' => 'biden@whitehouse.gov',
                'password' => Hash::make('password'),
                'is_admin' => true,
                'remember_token' => null,
                'created_at' => now()->subDays(rand(1, 100)),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Merkel',
                'first_name' => 'Angela',
                'email' => 'merkel@bundestag.de',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'remember_token' => null,
                'created_at' => now()->subDays(rand(1, 100)),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Zelensky',
                'first_name' => 'Volodymyr',
                'email' => 'zelensky@president.gov.ua',
                'password' => Hash::make('password'),
                'is_admin' => true,
                'remember_token' => null,
                'created_at' => now()->subDays(rand(1, 100)),
                'updated_at' => now(),
            ],
            [
                'last_name' => 'Fitzgerald Kennedy',
                'first_name' => 'John',
                'email' => 'JFK@gmail.com',
                'password' => Hash::make('IamD3ad'),
                'is_admin' => false,
                'remember_token' => 1234,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($presidents);
    }
}
