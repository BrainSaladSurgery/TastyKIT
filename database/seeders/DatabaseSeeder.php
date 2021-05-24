<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call([
            RolesSeeder::class,
            AddressesSeeder::class,
            ProductCategorySeeder::class,
            ProductSeeder::class,
            DrinkCategorySeeder::class,
            DrinkSeeder::class
        ]);

        \App\Models\Address::factory(60)->create();
        \App\Models\User::factory(30)->create();

    }
}