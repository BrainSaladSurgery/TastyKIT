<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dish;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new  \FakerRestaurant\Provider\es_PE\Restaurant($faker));
        $fkr = \Faker\Factory::create();

        //Entrantes
        for($i = 0 ; $i < 10; $i++){

            Dish::create([
                'price' => $faker->randomFloat(2,4,8),
                'description' =>$fkr->text(),
                'name' =>$faker->foodName(),
                'ud' =>$faker->numberBetween(1,4),
                'type' => 'Plato',
                'categories_id' => 2
            ]);

        }

        //Primeros
        for($i = 0 ; $i < 8; $i++){

            Dish::create([
                'price' => $faker->randomFloat(2,8,12),
                'description' =>$fkr->text(),
                'name' =>$faker->foodName(),
                'ud' =>$faker->numberBetween(1,4),
                'type' => 'Plato',
                'categories_id' => 3
            ]);

        }

        //Segundos
        for($i = 0 ; $i < 7; $i++){

            Dish::create([
                'price' => $faker->randomFloat(2,11,21),
                'description' =>$fkr->text(),
                'name' =>$faker->foodName(),
                'ud' =>$faker->numberBetween(1,4),
                'type' => 'Plato',
                'categories_id' => 4
            ]);

        }

        //Postres
        for($i = 0 ; $i < 6; $i++){

            Dish::create([
                'price' => $faker->randomFloat(2,4,8),
                'description' =>$fkr->text(),
                'name' =>$faker->foodName(),
                'ud' =>$faker->numberBetween(1,4),
                'type' => 'Plato',
                'categories_id' => 5
            ]);

        }
    }
}