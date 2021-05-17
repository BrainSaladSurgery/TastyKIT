<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'name' => 'Admin'
        ]);

        Rol::create([
            'name' => 'Client'
        ]);

        Rol::create([
            'name' => 'User'
        ]);
    }
}
