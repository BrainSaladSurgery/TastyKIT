<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DishCategory;

class DishCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DishCategory::create([
            'name' => 'Otros',
            'description' => 'Otros'
        ]);

        DishCategory::create([
            'name' => 'Entrantes',
            'description' => 'Preparados para picar y compartir',
        ]);

        DishCategory::create([
            'name' => 'Primeros',
            'description' => 'Nuestra mejor selección'
        ]);

        DishCategory::create([
            'name' => 'Segundos',
            'description' => 'Nuestra mejor selección'
        ]);

        DishCategory::create([
            'name' => 'Postres',
            'description' => 'Tan dulce como nosotros'
        ]);

    }
}
