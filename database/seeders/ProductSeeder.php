<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades;

class ProductSeeder extends Seeder
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

        //Vegetales
        for($i = 0 ; $i < 18; $i++){

            Product::create([
                'amount' => $fkr->numberBetween(1,30),
                'image'=> 'https://cdn1.iconfinder.com/data/icons/fruit-filled-line-1/64/food_fruit_vegetable_vegetarian_organic_tomato-256.png',
                'description' =>$fkr->text(),
                'name' =>$faker->vegetableName(),
                'product_categories_id' => 2
            ]);

        }

        //Carnes
        for($i = 0 ; $i < 12; $i++){

            Product::create([
                'amount' => $fkr->numberBetween(1,30),
                'image' => 'https://cdn3.iconfinder.com/data/icons/food-set-3/91/Food_C223-256.png',
                'description' =>$fkr->text(),
                'name' =>$faker->meatName(),
                'product_categories_id' => 3
            ]);

        }

        //Frutas
        for($i = 0 ; $i < 11; $i++){

            Product::create([
                'amount' => $fkr->numberBetween(1,30),
                'image' => 'https://cdn3.iconfinder.com/data/icons/spring-2-1/30/Strawberry-256.png',
                'description' =>$fkr->text(),
                'name' =>$faker->fruitName(),
                'product_categories_id' => 4
            ]);

        }

        //Pescado
        for($i = 0 ; $i < 11; $i++){

            Product::create([
                'amount' => $fkr->numberBetween(1,30),
                'image' => 'https://cdn3.iconfinder.com/data/icons/food-set-3/91/Food_C205-256.png',
                'description' =>$fkr->text(),
                'name' =>$faker->foodName(),
                'product_categories_id' => 5
            ]);

        }

    }
}