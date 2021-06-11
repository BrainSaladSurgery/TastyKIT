<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Table;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i = 1; 25 > $i; $i++){

            Table::create([
                'name'=> $i,
                'min_pax' => '1',
                'max_pax' => $faker->numberBetween(1,10),
            ]);
        }

    }
}