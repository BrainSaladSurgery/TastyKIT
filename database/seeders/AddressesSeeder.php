<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'city' => 'Sin dirección',
            'location' => 'Sin dirección',
            'address' => 'Sin dirección',
            'country' => 'Sin dirección',
            'ZIP' => 'Sin dirección',
        ]);
    }
}
