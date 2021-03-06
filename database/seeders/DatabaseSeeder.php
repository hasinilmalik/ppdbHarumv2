<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
       $this->call([    
        ContactSeeder::class,
        UserSeeder::class,
        // MemberSeeder::class,
        IncomeSeeder::class,
        MenuSeeder::class,
        TitlemenuSeeder::class,
        FundSeeder::class,
        UniformSeeder::class,
        SetupSeeder::class,
    ]);
    }
}
