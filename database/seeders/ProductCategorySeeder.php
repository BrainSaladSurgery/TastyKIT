<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'name' => 'Sin asignar',
            'description' => 'Sin descripción'
        ]);

        ProductCategory::create([
            'name' => 'Vegetales',
            'description' => 'Verduras frescas',
        ]);

        ProductCategory::create([
            'name' => 'Carnes',
            'description' => 'Carnes frescas'
        ]);

        ProductCategory::create([
            'name' => 'Frutas',
            'description' => 'Frutas frescas'
        ]);

    }
}
