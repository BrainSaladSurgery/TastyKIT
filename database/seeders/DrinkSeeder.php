<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Drink;
use Illuminate\Support\Facades;

class DrinkSeeder extends Seeder
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

        //Vinos
        for($i = 0 ; $i < 18; $i++){

            Drink::create([
                'price' => $faker->randomFloat(3,10),
                'amount' => $fkr->numberBetween(1,30),
                'image'=> 'https://cdn1.iconfinder.com/data/icons/addiction-drugs-2/24/Alcohol_addiction_wine-256.png',
                'description' =>$fkr->text(),
                'name' =>$faker->beverageName(),
                'type' => 'Bebida',
                'categories_id' => 3
            ]);

        }

        //Refrescos
        for($i = 0 ; $i < 12; $i++){

            Drink::create([
                'price' => $faker->randomFloat(2,4),
                'amount' => $fkr->numberBetween(1,30),
                'image' => 'https://cdn0.iconfinder.com/data/icons/vectr-examples/458/food-coke-256.png',
                'description' =>$fkr->text(),
                'name' =>$faker->beverageName(),
                'type' => 'Bebida',
                'categories_id' => 2
            ]);

        }

        //Cocteles
        for($i = 0 ; $i < 11; $i++){

            Drink::create([
                'price' => $faker->randomFloat(4,8),
                'amount' => $fkr->numberBetween(1,30),
                'image' => 'https://cdn2.iconfinder.com/data/icons/restaurant-1/100/martini_dinner_lunch_restaurant_vegetables_drink-256.png',
                'description' =>$fkr->text(),
                'name' =>$faker->beverageName(),
                'type' => 'Bebida',
                'categories_id' => 4
            ]);

        }

        //Otros
        for($i = 0 ; $i < 11; $i++){

            Drink::create([
                'price' => $faker->randomFloat(1,3),
                'amount' => $fkr->numberBetween(1,30),
                'image' => 'https://cdn2.iconfinder.com/data/icons/beverage-packaging-free-pack-1/512/bottle-package-free-01-256.png',
                'description' =>$fkr->text(),
                'name' =>$faker->beverageName(),
                'type' => 'Bebida',
                'categories_id' => 1
            ]);

        }
    }
}
