<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DrinkCategory;

class DrinkCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DrinkCategory::create([
            'name' => 'Otros',
            'description' => 'Otros'
        ]);

        DrinkCategory::create([
            'name' => 'Refrescos',
            'description' => 'Cocacola, fanta, aquarius...',
        ]);

        DrinkCategory::create([
            'name' => 'Con Alcohol',
            'description' => 'Vinos, cervezas...'
        ]);

        DrinkCategory::create([
            'name' => 'Cocteles',
            'description' => 'Daiquiri, Margarita, Mojito...'
        ]);


    }
}