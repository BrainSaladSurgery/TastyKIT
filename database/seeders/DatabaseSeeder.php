<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Str;

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
            RoleSeeder::class,
            AddressesSeeder::class,
            ProductCategorySeeder::class,
            ProductSeeder::class,
            DrinkCategorySeeder::class,
            DrinkSeeder::class,
            DishCategorySeeder::class,
            DishSeeder::class,
            TableSeeder::class
        ]);

        \App\Models\Address::factory(60)->create();
        \App\Models\Reservation::factory(20)->create();
        $Admins = \App\Models\User::factory(4)->create();
        $Users = \App\Models\User::factory(15)->create();

        $myUser = User::create([
            'name' => 'Yelx',
            'email' => 'jessica.rod.mir@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678D'), // password
            'remember_token' => Str::random(10),
            'dni' => '12345678D',
            'phone' => '1234567899',
            'firstName' => 'Jessica',
            'lastName' => 'Rodriguez',
            'type' => 'Usuario',
            'Bir_Date' =>'1992-04-11',
            'addresses_id'=> '1'

        ]);

        Order::create([
            'type' =>'Comanda',
            'ticket' =>'1',
            'status' =>'open',
            'comment'=>'patata',
            'table_id'=>'2',
            'dish_id'=>1,
            'ud'=>1,
            'user_id'=>20,
            'total'=>6.75,
        ]);

        $myUser->assignRole('Admin');

        foreach($Admins as $admin){
            $admin->assignRole('Admin');
        }

        foreach($Users as $user){
            $user->assignRole('User');
        }

        //\App\Models\Table::factory(20)->create();


    }
}